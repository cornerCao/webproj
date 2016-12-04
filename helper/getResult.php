<!--handle search logics-->
<?php
	require_once("connect.php");
	if($_POST['input']){
		$select=$_POST['select'];
		$input=strtolower($_POST['input']);
		echo "<tr><th>Title</th><th>Date</th><th>Time</th></tr>";
		if($select=="Events"){
			$sql="select eventID,title,date,beginTime,endTime from events where LOWER(title) like '%$input%' or LOWER(venue) like '%$input%' order by date,beginTime ASC;";
			$res1=mysql_query($sql) or die(mysql_error());
			while($eventinfo=mysql_fetch_array($res1)){
				echo "<tr><td><a href='eventDetail.php?id=$eventinfo[0]'>$eventinfo[1]</a></td>";
				echo "<td>$eventinfo[2]</td><td>$eventinfo[3] - $eventinfo[4]</td></tr>";
				echo "<tr><td colspan='3'><img style='margin-left:-10px' src='img/line.png'/></td></tr>";
			}
			$sql="select distinct P.eventID from presentation P,authorsabstracts A where (LOWER(P.title) like '%$input%') or (LOWER(P.biography) like '%$input%') or (P.abstractID=A.abstractID and LOWER(A.lastname) like '%$input%') or (P.abstractID=A.abstractID and LOWER(A.firstname) like '%$input%');";
			$res2=mysql_query($sql) or die(mysql_error());
			while($eventIDa=mysql_fetch_array($res2)){
				$eventID=$eventIDa[0];
				$sql="select eventID,title,date,beginTime,endTime from events where eventID='$eventID'";
				$ans=mysql_query($sql) or die(mysql_error());
				$info=mysql_fetch_array($ans);
				echo "<tr><td><a href='eventDetail.php?id=$info[0]'>$info[1]</a></td>";
				echo "<td>$info[2]</td><td>$info[3] - $info[4]</td></tr>";
				echo "<tr><td colspan='3'><img style='margin-left:-10px' src='img/line.png'/></td></tr>";
			}
		}
		if($select=="Presentations"){
			$sql="select distinct P.abstractID,P.title,P.date,P.beginTime,P.endTime from presentation P,authorsabstracts A where (LOWER(P.title) like '%$input%') or (LOWER(P.biography) like '%$input%') or (P.abstractID=A.abstractID and LOWER(A.lastname) like '%$input%') or (P.abstractID=A.abstractID and LOWER(A.firstname) like '%$input%');";
			$res=mysql_query($sql) or die(mysql_error());
			while($info=mysql_fetch_array($res)){
				echo "<tr><td style='width:55%'><a href='preDetail.php?id=$info[0]'>$info[1]</a></td>";
				echo "<td style='width:20%'>$info[2]</td><td style='width:25%'>$info[3] - $info[4]</td></tr>";
				echo "<tr><td colspan='3'><img style='margin-left:-10px' src='img/line.png'/></td></tr>";
			}
		}
	}
mysql_close($connect);

?>
