<?php
$connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("链接数据库失败！"); 
mysql_select_db("16027789x",$connect) or die (mysql_error());
$file=fopen("Events_CSV.csv","r");
$i=0;
while(!feof($file)){
	$data=fgetcsv($file);
	if($data[0])$temp1[$i]=$data;
	$i+=1;
}
fclose($file);
$last="";
for($i=1;$i<count($temp1);$i++){
	$info=$temp1[$i];
	if($info[5]=="")$info[5]=$last;
	else $last=$info[5];
	$sql="insert into Events(eventID,date,beginTime,endTime,title,venue) values('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]');";
	$res=mysql_query($sql) or die(mysql_error());
			if(mysql_error()){
				echo "failed!";
			}
	}
$file=fopen("AuthorsAbstracts.csv","r");
$i=0;
while(!feof($file)){
	$data=fgetcsv($file);
	if($data[0])$temp2[$i]=$data;
	$i+=1;
}
fclose($file);
for($i=1;$i<count($temp2);$i++){
	$info=$temp2[$i];
	$sql="insert into AuthorsAbstracts(abstractID,authorID,lastname,firstname,type) values('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]');";
	mysql_query($sql) or die(mysql_error());
			if(mysql_error()){
				echo "failed!";
			}
	}
$file=fopen("PresentationCSV.csv","r");
$i=0;
while(!feof($file)){
	$data=fgetcsv($file);
	if($data[0])$temp3[$i]=$data;
	$i+=1;
}
fclose($file);
for($i=1;$i<count($temp3);$i++){
	$info=$temp3[$i];
	if($info[1]=="keynote"){$sql="select eventID from Events where LOWER(title)=LOWER('keynote session') and date='$info[10]' and '$info[8]'>=beginTime and '$info[9]'<=endTime;";
	$res=mysql_query($sql) or die(mysql_error());
	$ID=mysql_fetch_array($res);
	$event=$ID[0];}
	else if($info[1]=="parallel"){
		echo "haha";
		$sql="select eventID from Events where LOWER(title)=LOWER('parallel sessions') and date='$info[10]' and '$info[8]'>=beginTime and '$info[9]'<=endTime;";
	$res=mysql_query($sql) or die(mysql_error());
	$ID=mysql_fetch_array($res);
	$event=$ID[0];}
	$sql="insert into Presentation(abstractID,type,title,speakerID,beginTime,endTime,date,biography,eventID) values('$info[0]','$info[1]','$info[2]','$info[5]','$info[8]','$info[9]','$info[10]','$info[11]','$event');";
	mysql_query($sql) or die(mysql_error());
			if(mysql_error()){
				echo "failed!";
			}
	$sql="update AuthorsAbstracts set speakerPhoto='$info[6]',speakerAffiliation='$info[7]' where authorID='$info[5]';";
	mysql_query($sql) or die(mysql_error());
			if(mysql_error()){
				echo "failed!";
			}
	}
?>
