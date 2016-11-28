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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">COMP3421</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="./presentation.php">Presentations</a></li>
          <li><a href="./speakers.php">Speakers</a></li>
          <li><a href="./attractions.html">Attractions</a></li>
        <li><a href="./RouteFromHKAirport.html">Route</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

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
//$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！");
////连接数据库(test)
//mysql_select_db("16027789x",$connect) or die (mysql_error());
//$sql="select eventID,name,date,duration from event;";
//$result=mysql_query($sql) or die(mysql_error());
//var_dump($events);
?>
<div class="event-list">
    <ul class="event-items">
<!--        --><?// while ($event = mysql_fetch_assoc($result)) {?>
        <li >
            <div class="event-info">
                <a class="info-right">
                    <span class="glyphicon glyphicon-map-marker"></span></br>
                    <span>Silverbox 1-3, Hotel ICON</span>
                </a>
                <div class="info-top">
                    <span>3/11/2014</span>
                </div>
                <h4 class="title">
                    <a href="presentation.php?eventId=1">
                        aaa
                    </a>
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
                    <span title="time" class="glyphicon glyphicon-time"></span><span>7:45</span><span>-</span><span>8:30</span></span>
                </div>

            </div>
        </li>
<!--        --><?//}?>

    </ul>
</div>
<footer>
    <address>
        COMP PolyU HongKong<br/>
        <abbr title="Phone">P:</abbr>+852xxxxxxxx
    </address>
    <address>
        <strong>COMP3421</strong><br/>
        <strong>Members:</strong><br/>
        <span title="email">Anna:</span><a href="mailto:anna.huang@connect.polyu.hk">anna.huang@connect.polyu.hk</a><br/>
        <span title="email">Laura:</span><a href="mailto:anna.huang@connect.polyu.hk">anna.huang@connect.polyu.hk</a><br>
        <span title="email">Lian:</span><a href="mailto:14040502d@connect.polyu.hk">14040502d@connect.polyu.hk</a><br>
        <span title="email">Ivan:</span><a href="mailto:13068412d@connect.polyu.hk">13068412d@connect.polyu.hk</a>
    </address>
</footer>
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