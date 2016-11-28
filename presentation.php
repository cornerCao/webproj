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
                <li><a href="./conference.php">Home</a></li>
                <li class="active"><a href="#">Presentations <span class="sr-only">(current)</span></a></li>
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
<div class="back">
    <a href="./conference.php"><span class="glyphicon glyphicon-chevron-left"></span></a>
</div>

<?php
$eventId =isset($_GET['eventId'])? $_GET['eventId']:null;
$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！");
//连接数据库(test)
mysql_select_db("16027789x",$connect) or die (mysql_error());
if($eventId){
    $sql="select * from presentation,authorsabstracts where presentation.eventID = $eventId and presentation.speakerID = authorsabstracts.authorID;";
}else{
    $sql = "select * from presentation,authorsabstracts;";
}
$result=mysql_query($sql) or die(mysql_error());
?>
<div class="preTable">
    <div class="preCell">
        <!--<div class="eventTable table-responsive">-->
        <table class="table table-responsive" style="margin-bottom: 0px">
            <thead>
            <tr>
                <th>AbstractId</th>
                <th>Type</th>
                <th>Title</th>
                <th>Speaker</th>
                <th>Date</th>
                <th>Begining_time</th>
                <th>Ending_time</th>
                <th>Biography</th>
            </tr>
            </thead>
            <tbody>
            <? while ($pre = mysql_fetch_assoc($result)) {?>
            <tr>
                <td><?echo $pre['abstractID']?></td>
                <td><?echo $pre['type']?></td>
                <td><?echo $pre['title']?></td>
                <td><a href="speakerDetail.php?speakerId=<?echo $pre['speakerID'];?>"><?echo $pre['firstname'].' '.$pre['lastname']?></a></td>
                <td><?echo $pre['date']?></td>
                <td><?echo $pre['beginTime']?></td>
                <td><?echo $pre['endTime']?></td>
                <td><?echo $pre['biography']?></td>
            </tr>
                <?
            }
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