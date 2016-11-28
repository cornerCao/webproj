<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speakers</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/speakers.css" rel="stylesheet">
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
                <li><a href="conference.php">Home</span></a></li>
                <li class="active"><a href="#">Speakers<span class="sr-only">(current)</span></a></li>
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

<div class="speaker-list">
    <ul class="speaker-items">
        <!--        --><?// while ($speaker = mysql_fetch_assoc($result)) {?>
        <li >
            <div class="speaker-info">
                <a class="info-right">
                    <img src="img/cc1.jpg" width="60px" height="70px"/>
                </a>
                <div class="info-top">
                    <span>Affiliation</span>
                </div>
                <h4 class="title">
                    <a href="speakerDetail.php?speakerId=1">
                        aaa
                    </a>
                </h4>
            </div>
        </li>
        <!--        --><?//}?>

    </ul>
</div>

</body>
</html>