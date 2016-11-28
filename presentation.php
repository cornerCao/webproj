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
                <li class="active"><a href="./conference.php">Home <span class="sr-only">(current)</span></a></li>
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
//$eventId = $_GET['eventId'];
//$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！");
////连接数据库(test)
//mysql_select_db("16027789x",$connect) or die (mysql_error());
//$sql="select eventId,title,date,beginning_time,ending_time,venue from Event where eventId='$eventId';";
//$result=mysql_query($sql) or die(mysql_error());
?>
<div class="preTable">
    <?// while ($event = mysql_fetch_assoc($result)) {?>
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
                <th>Abstract</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1570017439</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
            </tr>
            </tbody>
        </table>
    </div>
    <?
    //}
    ?>
</div>

<!--</div>-->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>