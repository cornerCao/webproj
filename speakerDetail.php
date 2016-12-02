<!DOCTYPE html>
<?php 
require_once("helper/connect.php");
$uri=$_SERVER["REQUEST_URI"];
$idloc=strpos($uri,"id=")+3;
$id=substr($uri,$idloc);
$sql="select firstname,lastname,speakerPhoto,speakerAffiliation,type,abstractID from authorsabstracts where authorID='$id'";
$res=mysql_query($sql) or die(mysql_error());
$info=mysql_fetch_array($res);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speakers</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/speakers.css" rel="stylesheet">
	<style type="text/css">
    .alert h4{
        font-weight: 100;
    }
	.tb{
		width:100%;
		align:left;
		font:18px Arial light;
		text-align:left;
	}
	.tb td{
		padding:15px;
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
<?$active="speakers";
include_once "helper/nav.php";
?>
<div class="speaker-list"style="margin-left:25%;color:#888">
<br>
<h1>Speaker Infomation</h1>
<br>
<div class="basic-grey" style="width:700px">
    <table class="tb" >
	<tr><td>Full Name: <?php echo $info[0]." ".$info[1];?></td><td rowspan="4" style="text-align:right"><img style="width:250px;height:300px" src="img/<?php echo $info[2];?>"/></td></tr>
	<tr><td>Affiliation: <?php echo $info[3];?></td></tr>
	<tr><td>Type: <?php if($info[4]=="n")echo "not PolyU";else echo "PolyU";?></td></tr>
	<tr><td>Presentation Title: <a href="preDetail.php?id=<?php echo $info[5];?>"><?php $sql="select title from presentation where abstractID='$info[5]';";
								$res=mysql_query($sql) or die(mysql_error());
								$title=mysql_fetch_array($res);echo $title[0];?></a></td></tr>
	</table>
</div>
</div>

</body>
</html>