<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>webproj</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/conferenceDetail.css" rel="stylesheet">
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
        <li class="active"><a href="./conference.php">Home <span class="sr-only">(current)</span></a></li>
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
<div class="back">
    <a href="./conference.php"><span class="glyphicon glyphicon-chevron-left"></span></a>
</div>
<div class="feedback">
    <a href="./survey.php?conferenceId=<?echo $_GET['conferenceId']?>"><span class="glyphicon glyphicon-pencil"></span></a>
</div>
<?php
$conferenceId = $_GET['conferenceId'];
$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！");
//连接数据库(test)
mysql_select_db("16027789x",$connect) or die (mysql_error());
$sql="select eventId,title,date,beginning_time,ending_time,venue from Event where conferenceId='$conferenceId';";
$result=mysql_query($sql) or die(mysql_error());
?>
<!--<div class="eventTable">-->
<!---->
<!--    --><?// while ($event = mysql_fetch_assoc($result)) {?>
<!--        <div class="legend">-->
<!--            <span>Event#</span><span>Title</span><span>Date</span><span>Beginning_time</span><span>Ending_time</span><span>Venue</span>-->
<!--        </div>-->
<!--    <div class="event" onclick="showEventDetails(this)" id=--><?//echo "event".$event['eventId']?><!-->-->
<!--        <span>--><?//echo $event['eventId']?><!--</span>-->
<!--        <span>--><?//echo $event['title']?><!--</span>-->
<!--        <span>--><?//echo $event['date']?><!--</span>-->
<!--        <span>--><?//echo $event['beginning_time']?><!--</span>-->
<!--        <span>--><?//echo $event['ending_time']?><!--</span>-->
<!--        <span>--><?//echo $event['venue']?><!--</span>-->
<!--        <div class="legend">-->
<!--            <span>Presentation#</span><span>Title</span><span>Speaker</span><span>Beginning_time</span><span>Ending_time</span><span>Biography</span><span>Abstract</span>-->
<!--        </div>-->
<!--        --><?php
//        $eventId = $event['eventId'];
//            $sql="select * from Presentation join Speaker where eventID='$eventId' and Presentation.speakerID = Speaker.speakerID;";
//            $pre_temp=mysql_query($sql) or die(mysql_error());
//            while ($pre = mysql_fetch_assoc($pre_temp)) {
//                ?>
<!--                <div class="pre">-->
<!--                    <span>--><?//echo $pre['abstractID']?><!--</span>-->
<!--                    <span>--><?//echo $pre['title']?><!--</span>-->
<!--                    <span>--><?//echo $pre['firstname'].' '.$pre['lastname']?><!--</span>-->
<!--                    <span>--><?//echo $pre['beginning_time']?><!--</span>-->
<!--                    <span>--><?//echo $pre['ending_time']?><!--</span>-->
<!--                    <span>--><?//echo $pre['biography']?><!--</span>-->
<!--                    <span>--><?//echo $pre['abstract']?><!--</span>-->
<!--                </div>-->
<!--                --><?php
//            }
//        ?>
<!--    </div>-->
<!--    --><?//}?>
<!--</div>-->
<div class="eventTable">
<? while ($event = mysql_fetch_assoc($result)) {?>
<div class="eventCell">
<!--<div class="eventTable table-responsive">-->
    <table class="table" style="margin-bottom: 0px">
        <thead>
        <tr>
            <th>Event</th>
            <th>Title</th>
            <th>Date</th>
            <th>Begining_time</th>
            <th>Ending_time</th>
            <th>Venue</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td><?echo $event['title']?></td>
            <td><?echo $event['date']?></td>
            <td><?echo $event['beginning_time']?></td>
            <td><?echo $event['ending_time']?></td>
            <td><?echo $event['venue']?></td>
        </tr>
        </tbody>
    </table>
    <table class="table" style="margin-top:0;margin-left: 16%;width: 84%">
        <thead>
        <tr>
            <th>Presentation</th><th>Title</th><th>Speaker</th><th>Beginning_time</th><th>Ending_time</th><th>Biography</th><th>Abstract</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $eventId = $event['eventId'];
            $sql="select * from Presentation join Speaker where eventID='$eventId' and Presentation.speakerID = Speaker.speakerID;";
            $pre_temp=mysql_query($sql) or die(mysql_error());
            while ($pre = mysql_fetch_assoc($pre_temp)) {?>
                <tr>
                    <td></td>
                    <td><?echo $pre['title']?></td>
                    <td><?echo $pre['firstname'].' '.$pre['lastname']?></td>
                    <td><?echo $pre['beginning_time']?></td>
                    <td><?echo $pre['ending_time']?></td>
                    <td><?echo $pre['biography']?></td>
                    <td><?echo $pre['abstract']?></td>
                </tr>
            <?}?>
        </tbody>
    </table>
</div>
<?
}
?>
</div>

<!--</div>-->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script>
    var showEventDetails = function (eventDiv) {
        $.ajax({
            method:'post',
            data:{eventId:eventDiv.id.substr(5)},
            dataType:'json',
            url:'./getEventInfo.php',
            success:function (data){
//                alert(eventDiv.id);
//                $($(eventDiv).parent()).append('<div id='+eventDiv.id+'Detail'+' style="width: 80%"'+'class="eventDetail">' + '</div>');
//                for(var index in data){
//                    $('#'+eventDiv.id+'Detail').append(
//                        ' <div>'+
//                        '<span>'+data[index].abstractId+'</span>'+
//                        '<span>'+data[index].title+'</span>'+
//                        '<span>'+data[index].speakerId+'</span>'+
//                        '<span>'+data[index].beginning_time+'</span>'+
//                        '<span>'+data[index].ending_time+'</span>'+
//                        '<span>'+data[index].biography+'</span>'+
//                        '<span>'+data[index].abstract+'</span>'+
//                        '</div>'
//                    );
//                }
//                alert(data);
            },
            error:function () {
                alert("error");
            }
        })
    }
//    $('.event').click(function (e) {
//
//    });
</script>
</body>
</html>