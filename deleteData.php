<?
$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！"); 
//连接数据库(test) 
mysql_select_db("16027789x",$connect) or die (mysql_error());
$sql="TRUNCATE TABLE Conference;";
mysql_query($sql) or die(mysql_error());
$sql="TRUNCATE TABLE Speaker;";
mysql_query($sql) or die(mysql_error());
$sql="TRUNCATE TABLE Event;";
mysql_query($sql) or die(mysql_error());
$sql="TRUNCATE TABLE Presentation;";
mysql_query($sql) or die(mysql_error());
?>