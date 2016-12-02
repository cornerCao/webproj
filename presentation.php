<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>webproj</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/presentation.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
</head>
<body>
<?$active="presentation";
include_once "helper/nav.php";
?>
<div class="back">
    <a href="./conference.php"><span class="glyphicon glyphicon-chevron-left"></span></a>
</div>

<?php
include_once 'helper/connect.php';
//连接数据库(test)
mysql_select_db("16027789x",$connect) or die (mysql_error());
if($eventId){
    $sql="select * from presentation,authorsabstracts where presentation.eventID = $eventId and presentation.speakerID = authorsabstracts.authorID;";
}else{
    $sql = "select * from presentation JOIN authorsabstracts where presentation.speakerID = authorsabstracts.authorID;";
}
$result=mysql_query($sql) or die(mysql_error());
?>
<div class="preTable">
    <h1>Sessions</h1>
    <div class="preCell">
        <!--<div class="eventTable table-responsive">-->
        <table class="table table-responsive" style="margin-bottom: 0px">
            <thead>
            <tr>
<!--                <th>AbstractId</th>-->
<!--                <th>Type</th>-->
                <th>Title</th> 
                <th>Speaker</th>
                <th>Date</th>
                <th>Begining_time</th>
                <th>Ending_time</th>
                <th>Abstract</th>
            </tr>
            </thead>
            <tbody>
            <? while ($pre = mysql_fetch_assoc($result)) {?>
            <tr>
<!--                <td>--><?//echo $pre['abstractID']?><!--</td>-->
<!--                <td>--><?//echo $pre['type']?><!--</td>-->
                <td><?echo $pre['title'];?></td>
                <td><a href="speakerDetail.php?id=<?echo $pre['speakerID'];?>"><?echo $pre['firstname'].' '.$pre['lastname'];?></a></td>
                <td><?echo $pre['date'];?></td>
                <td><?echo substr($pre['beginTime'],0,strrpos($pre['beginTime'],':'));?></td>
                <td><?echo substr($pre['endTime'],0,strrpos($pre['endTime'],':'));?></td>
                <td style="text-align:left;"><?echo $pre['abstract'];?></td>
            </tr>
                <?
            }
            mysql_close($connect);
            ?>
            </tbody>
        </table>
    </div>

</div>

<!--</div>-->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>
