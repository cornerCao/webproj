<?php
/**
 * Created by PhpStorm.
 * User: huanganna
 * Date: 11/15/16
 * Time: 7:31 PM
 */

//$eventId = $_POST['eventId'];
$eventId = 1;
$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！");
//连接数据库(test)
mysql_select_db("16027789x",$connect) or die (mysql_error());
$sql="select * from Presentation where eventID='$eventId';";
//var_dump($sql);
$result=mysql_query($sql) or die(mysql_error());
while ($event = mysql_fetch_assoc($result)){
    $data[] =[
        'abstractId'=>$event['abstractID'],
        'title'=>$event['title'],
        'speakerId'=>$event['speakerID'],
        'beginning_time'=>$event['beginning_time'],
        'ending_time'=>$event['ending_time'],
        'biography'=>$event['biography'],
        'abstract'=>$event['abstract']
    ];
}

echo json_encode($data);