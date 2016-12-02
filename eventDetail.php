<?php
	require_once("connect.php");
$uri=$_SERVER["REQUEST_URI"];
$idloc=strpos($uri,"id=")+3;
$id=substr($uri,$idloc);
$sql="select title,date,beginTime,endTime,venue from events where eventID='$id'";
$res=mysql_query($sql) or die(mysql_error());
$info=mysql_fetch_array($res);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/speakers.css" rel="stylesheet">
	<style type="text/css">
    .alert h4{
        font-weight: 100;
    }
	.tb{
		width:100%;
		align:left;
		font-size:17px;
		font-size:Arial light;
		text-align:left;
		color:#888;
	}
	.tb td{
		padding-left:10px;
		padding-top:20px;
	}
	.content{
		width:130%;
		align:left;
		font-size:15px;
		font-size:Arial light;
		text-align:left;
		color:#888;
	}
	.content td{
		padding-left:10px;
		padding-top:20px;
	}
.basic-grey {
margin-top:auto;
margin-left:auto;
margin-right:auto;
max-width: 1000px;
background: #fff;
font: 20px,"Arial";
color: #888;
text-shadow: 1px 1px 1px #FFF;
border:0px solid #E4E4E4;
}
.basic-grey h1 {
font-size: 35px;
padding: 0px 0px 10px 40px;
display: block;
border-bottom:1px solid #E4E4E4;
margin: -10px -15px 30px -10px;;
color: #888;
}
.basic-grey .button {
background: #5f9ea0;
border: none;
padding: 10px 25px 10px 25px;
color: #FFF;
box-shadow: 1px 1px 5px #B6B6B6;
border-radius: 3px;
text-shadow: 1px 1px 1px #9E3F3F;
cursor: pointer;
}
.basic-grey .button:hover {
background: #008080
}
</style>
</head>
<body>
<?$active="search";
include_once "helper/nav.php";
?>
<div class="speaker-list"style="margin-left:25%;color:#888">
<br>
<h3><?php echo $info[0];?></h3>
<br>
<div>
    <table class="tb" >
	<tr><td><i class="glyphicon glyphicon-calendar"/></td><td><?php echo $info[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$info[2]." - ".$info[3];?></td></tr>
	<tr><td><i class="glyphicon glyphicon-home"/></td><td><?php echo $info[4];?></td></tr>
	<tr><td><i class="glyphicon glyphicon-th-list"/></td><td>Content:</td></tr>
	</table>
	<br>
	<table class="content">
	<?php 
	$sql="select distinct abstractID,title,date,beginTime,endTime from presentation where eventID='$id' order by date,beginTime ASC;";
			$res=mysql_query($sql) or die(mysql_error());
			$flag=0;
			while($info=mysql_fetch_array($res)){
				$flag=1;
				echo "<tr><td style='width:55%'><a href='preDetail.php?id=$info[0]'>$info[1]</a></td>";
				echo "<td style='width:20%'>$info[2]</td><td style='width:25%'>$info[3] - $info[4]</td></tr>";
				echo "<tr><td colspan='3'><img style='margin-left:-10px;width:100%' src='img/line.png'/></td></tr>";
			}
			if($flag==0)echo "<tr style='font-size:20px'><td style='padding-left:60px;padding-top:0px'>No content</td></tr>";
	?>
	</table>
</div>
</div>

</body>
</html>
