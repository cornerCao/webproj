<!--code reuse-->
<!--connect database-->
<?php
$connect = mysql_connect("mysql.comp.polyu.edu.hk", "16027789x", "jsiyppoo") or die("链接数据库失败！");
    mysql_select_db("16027789x", $connect) or die (mysql_error());
?>