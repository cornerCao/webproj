<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speakers</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.speaker-list{
		margin: 70px auto;
		max-width: 500px;
		font: 20px "Arial";
		color: #888;
	}
	#speakertb{
		width:100%;
		padding-top:auto;
		padding-left:auto;
		margin-top:auto;
	}
	#photo{
		text-align:right;
	}
	</style>
</head>
<body>
<?$active="speakers";
include_once "helper/nav.php";
?>
<div class="speaker-list">
<br>
<h1>Speaker List</h1>
    <table id="speakertb">
	<?php
		require_once("helper/connect.php");
		$sql="select authorID,firstname,lastname,speakerPhoto,speakerAffiliation from authorsabstracts where speakerPhoto is not null";
		$res=mysql_query($sql) or die(mysql_error());
		while($info=mysql_fetch_array($res)){
			echo "<tr style='height:15%;'><td><p style='margin-top:30px;'>$info[4]</p></td>";
			echo "<td id='photo' rowspan='2'><img src='img/$info[3]' style='width:100px;height:100px;margin-top:20px'/></td></tr>";
			echo "<tr><td><a href='speakerDetail.php?id=$info[0]'>$info[1]  $info[2]</a><br></td></tr>";
			echo "<tr><td colspan='2'><img src='img/line.png'/><br></td></tr>";
		}
	mysql_close($connect);

	?>	
	</table>
</div>

</body>
</html>