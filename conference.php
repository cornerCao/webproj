<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>webproj</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/event.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
</head>
<body>
<?$active="conference";
    include_once "nav.php";
?>
<div class="uploadCSVDiv">
	<form action="upload.php" method="post" enctype="multipart/form-data">
    <input required="required" multiple type="file" name="fileToUpload[]" id="fileToUpload" style="display: none">
    <span class="chooseDiv chooseFileDiv" onclick="chooseFile()">Select File</span>
        <span id="filenamePrev"></span>
    <input disabled="disabled" class="submitInput" type="submit" value="Upload" name="submit">
	</form>
</div>

<div class="feedback">
    <a href="./survey.php"><span class="glyphicon glyphicon-pencil"></span></a>
</div>
<a id="gotoTop" onclick="gotoTop()" style="display:none;position: fixed;bottom: 15%;right: 3%;width: 50px;height: 50px;text-align: center;padding-top: 15px;color:white;background-color: #337ab7;border-radius: 5px "><span class="glyphicon glyphicon-chevron-up"></span></a>
<?
$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！");
//连接数据库(test)
mysql_select_db("16027789x",$connect) or die (mysql_error());
$sql="select * from events order by date ASC;";
$result=mysql_query($sql) or die(mysql_error());
?>
<div class="event-list">
    <ul class="event-items">
        <? while ($event = mysql_fetch_assoc($result)) {?>
        <li >
            <div class="event-info">
                <a href="RouteFromHKAirport.php?venue=<?$pos = substr($event['venue'],strpos($event['venue'], ',')+2); echo $pos;?>" class="info-right">
                    <span class="glyphicon glyphicon-map-marker"></span></br>
                    <span><?echo substr($event['venue'],0,strpos($event['venue'], ',')).',';?></span></br>
                    <span><?echo substr($event['venue'],strpos($event['venue'], ',')+2);?></span>
                </a>
                <div class="info-top">
                    <span><?echo $event['date']?></span>
                </div>
                <h4 class="title">
                    <?if(strpos($event['title'],"Session")){?>
                    <a href="presentation.php?eventId=<?echo $event['eventID'];?>">
                        <?echo $event['title']?>
                    </a>
                    <?}else{
                        echo $event['title'];
                    }?>
                </h4>
<!--                --><?php
//                $eventId = $event['eventID'];
//                $sql ="SELECT count(*) FROM Event where eventID='$eventId'";
//                $r = mysql_query($sql) or die(mysql_error());
//                $eventNum = mysql_fetch_array($r,MYSQLI_NUM);
//                $sql ="SELECT count(*) FROM Presentation JOIN Event where Presentation.eventID=Event.eventID and eventID='$eventId' ";
//                $r = mysql_query($sql) or die(mysql_error());
//                $preNum = mysql_fetch_array($r,MYSQLI_NUM);
//                ?>

                <div class="info-footer">
                    <span title="time" class="glyphicon glyphicon-time"></span><span><?echo substr($event['beginTime'],0,strrpos($event['beginTime'],':'));?></span><span>-</span><span><?echo substr($event['endTime'],0,strrpos($event['endTime'],':'));?></span></span>
                </div>

            </div>
        </li>
        <?}?>

    </ul>
</div>
<? include_once "footer.php";?>
<script src="jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script>
  var chooseFile = function () {
      $('#fileToUpload').click();
  };
  $(window).scroll(function(){
      var min_height = 300;
      var s = $(window).scrollTop();
      if( s > min_height){
          $("#gotoTop").fadeIn(200);
      }else{
          $("#gotoTop").fadeOut(200);
      };
  });
   $('#fileToUpload').change(function () {
            if (typeof (FileReader) != "undefined") {
                var filePrev = $('#filenamePrev');
                filePrev.html("");
                var regex = /(.csv|.CSV)$/;
                $($(this)[0].files).each(function () {
                    var file = $(this);
                    if (regex.test(file[0].name.toLowerCase())) {
                        filePrev.append(file[0].name+"&nbsp;&nbsp;");
                    }else{
                        alert("only csv files accepted!");
                    }
                });
            }
            $('input.submitInput').attr("disabled",false);
            $('input.submitInput').addClass("chooseDiv");
        })
    function gotoTop() {
        $('html,body').animate({scrollTop:0},400);
    }
</script>

</body>
</html>
