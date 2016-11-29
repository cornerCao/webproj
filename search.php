<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/speakers.css" rel="stylesheet">
	<style>
	.speaker-list{
		font: 20px,"Arial";
color: #888;
	}
	#speakertb{
		width:100%;
		padding-top:auto;
		padding-left:auto;
		margin-top:auto;
	}
	#speakertb td{
	}
	#photo{
		text-align:right;
	}
	.searchtable{
		width:100%;
	}
	.searchtable td{
		padding-top:20px;
	}
	#display{
		width:100%;
	}
	#display td,th{
		padding-top:20px;
	}
	#display th{
		font-size:20px;
	}
	</style>
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
				<li class="active"><a href="search.php">Search</a></li>
                <li><a href="./presentation.php">Presentations</a></li>
                <li><a href="Speakers.php">Speakers<span class="sr-only">(current)</span></a></li>
                <li><a href="./attractions.html">Attractions</a></li>
                <li><a href="./RouteFromHKAirport.html">Route</a></li>
                <li><a href="#">About</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="speaker-list">
<br>
<h1>General Search</h1>
    <div class="form-group">
				<table class="searchtable">
				<tr>
				<td style="width:30%">
				<select id="select" class="form-control">
				<option>Events</option>
				<option>Presentations</option>
				</select>
				</td>
                <td style="width:50%"><input type="text" id="keyword" class="form-control" placeholder="keyword or speaker's name"></td>
				<td style="width:40%"><button class="btn btn-default" onclick="getResult()"><i class="glyphicon glyphicon-search"></i></button></td>
				</tr>
				</table>
				<br>
				<table id="display">
</table>
                </div>
              
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>
function getResult(){
	var postdata={'select':$("#select").find("option:selected").text(),'input':$("#keyword").val()};
	$.post("getResult.php",postdata,function(data,status){
		$("#display").html(data);
	});
}
</script>
</body>
</html>