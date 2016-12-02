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
    <link href="css/common.css" rel="stylesheet">
</head>
<body>
<?$active="search";
include_once "helper/nav.php";
?>
<div class="contentDiv">
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
