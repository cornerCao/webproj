<?php
	require_once("helper/connect.php");
$uri=$_SERVER["REQUEST_URI"];
$idloc=strpos($uri,"id=")+3;
$id=substr($uri,$idloc);
$sql="select title,date,beginTime,endTime,speakerID,abstract from presentation where abstractID='$id'";
$res=mysql_query($sql) or die(mysql_error());
$info=mysql_fetch_array($res);
$sql="select firstname,lastname from authorsabstracts where authorID='$info[4]'";
$res=mysql_query($sql) or die(mysql_error());
$speakerinfo=mysql_fetch_array($res);
$speakername=$speakerinfo[0]." ".$speakerinfo[1];
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
		font:17px Arial light;
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
		font:15px Arial light;
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
font: 20px "Arial";
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
    <table class="tb">
	<tr><td><i class="glyphicon glyphicon-calendar"/></td><td colspan='2'><?php echo $info[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$info[2]." - ".$info[3];?></td></tr>
	    <tr><td><i class=""/></td><td colspan='2'><?php echo $info[5];?></td></tr>
	<tr><td><i class="glyphicon glyphicon-user"/></td><td style="width:20%">Speaker: </td><td style='text-align:left'><a href='speakerDetail.php?id=<?php echo $info[4];?>'><?php echo $speakername;?></a></td></tr>
	<tr><td></td><td valign="top">Authors: </td><td><?php 
		$sql="select firstname,lastname from authorsabstracts where abstractID='$id'";
		$res=mysql_query($sql) or die(mysql_error());
		while($name=mysql_fetch_array($res)){
			echo "<p>".$name[0]." ".$name[1]."</p>";
		}
	?></td></tr>
	</table>
	<br>
</div>
</div>

</body>
</html>
