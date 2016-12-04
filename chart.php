<?php session_start();?>
<?
	if(!isset($_SESSION['adminid']))
	{
		echo "<script>alert('Please login first'); location.href = 'login.php';</script>";
		//exit;
	}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
		<title>Survey Results</title>
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/common.css" rel="stylesheet">
		<?php
				$server = "mysql.comp.polyu.edu.hk";
				$user = "13068412d";
				$password = "intukqio";
				$database = "13068412d";
				$conn = mysql_connect($server,$user,$password) or die("Failed to connect the database!");
				
				mysql_select_db($database,$conn);
		?>
		<?
			$active="conference";
			include_once "nav.php";
		?>
		<?
			//$query = SELECT COUNT(ans1) AS Q1 FROM comp3421_surveyanswers WHERE ans1="A";
			$query1 = "SELECT Q1, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q1";
			$query2 = "SELECT Q2, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q2";
			$query3 = "SELECT Q3, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q3";
			$query4 = "SELECT Q4, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q4";
			$query5 = "SELECT Q5, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q5";
			$query6 = "SELECT Q6, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q6";
			$query7 = "SELECT Q7, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q7";
			$query8 = "SELECT Q8, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q8";
			$query9 = "SELECT Q9, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q9";
			$query10 = "SELECT Q10, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q10";
			$query11 = "SELECT Q11, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q11";
			$query12 = "SELECT Q12, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q12";
			$query13 = "SELECT Q13, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q13";
			$query14 = "SELECT Q14, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q14";
			$query15 = "SELECT Q15, COUNT(*) FROM comp3421_surveyanswers GROUP BY Q15";
			//execute queries
			$result1 = mysql_query($query1,$conn);
			$result2 = mysql_query($query2,$conn);
			$result3 = mysql_query($query3,$conn);
			$result4 = mysql_query($query4,$conn);
			$result5 = mysql_query($query5,$conn);
			$result6 = mysql_query($query6,$conn);
			$result7 = mysql_query($query7,$conn);
			$result8 = mysql_query($query8,$conn);
			$result9 = mysql_query($query9,$conn);
			$result10 = mysql_query($query10,$conn);
			$result11 = mysql_query($query11,$conn);
			$result12 = mysql_query($query12,$conn);
			$result13 = mysql_query($query13,$conn);
			$result14 = mysql_query($query14,$conn);
			$result15 = mysql_query($query15,$conn);
			//q1
			$row1_1 = mysql_fetch_array($result1);
			$row1_2 = mysql_fetch_array($result1);
			//q2
			$row2_1 = mysql_fetch_array($result2);
			$row2_2 = mysql_fetch_array($result2);
			$row2_3 = mysql_fetch_array($result2);
			$row2_4 = mysql_fetch_array($result2);
			$row2_5 = mysql_fetch_array($result2);
			//q3
			$row3_1 = mysql_fetch_array($result3);
			$row3_2 = mysql_fetch_array($result3);
			$row3_3 = mysql_fetch_array($result3);
			$row3_4 = mysql_fetch_array($result3);
			$row3_5 = mysql_fetch_array($result3);
			//q4
			$row4_1 = mysql_fetch_array($result4);
			$row4_2 = mysql_fetch_array($result4);
			$row4_3 = mysql_fetch_array($result4);
			//q5
			$row5_1 = mysql_fetch_array($result5);
			$row5_2 = mysql_fetch_array($result5);
			//q6
			$row6_1 = mysql_fetch_array($result6);
			$row6_2 = mysql_fetch_array($result6);
			$row6_3 = mysql_fetch_array($result6);
			$row6_4 = mysql_fetch_array($result6);
			$row6_5 = mysql_fetch_array($result6);
			//q7
			$row7_1 = mysql_fetch_array($result7);
			$row7_2 = mysql_fetch_array($result7);
			$row7_3 = mysql_fetch_array($result7);
			$row7_4 = mysql_fetch_array($result7);
			$row7_5 = mysql_fetch_array($result7);
			//q8
			$row8_1 = mysql_fetch_array($result8);
			$row8_2 = mysql_fetch_array($result8);
			$row8_3 = mysql_fetch_array($result8);
			$row8_4 = mysql_fetch_array($result8);
			$row8_5 = mysql_fetch_array($result8);
			//q9
			$row9_1 = mysql_fetch_array($result9);
			$row9_2 = mysql_fetch_array($result9);
			$row9_3 = mysql_fetch_array($result9);
			$row9_4 = mysql_fetch_array($result9);
			$row9_5 = mysql_fetch_array($result9);
			//q10
			$row10_1 = mysql_fetch_array($result10);
			$row10_2 = mysql_fetch_array($result10);
			$row10_3 = mysql_fetch_array($result10);
			$row10_4 = mysql_fetch_array($result10);
			$row10_5 = mysql_fetch_array($result10);
			//q11
			$row11_1 = mysql_fetch_array($result11);
			$row11_2 = mysql_fetch_array($result11);
			$row11_3 = mysql_fetch_array($result11);
			$row11_4 = mysql_fetch_array($result11);
			$row11_5 = mysql_fetch_array($result11);
			//q12
			$row12_1 = mysql_fetch_array($result12);
			$row12_2 = mysql_fetch_array($result12);
			$row12_3 = mysql_fetch_array($result12);
			$row12_4 = mysql_fetch_array($result12);
			$row12_5 = mysql_fetch_array($result12);
			//q13
			$row13_1 = mysql_fetch_array($result13);
			$row13_2 = mysql_fetch_array($result13);
			$row13_3 = mysql_fetch_array($result13);
			$row13_4 = mysql_fetch_array($result13);
			$row13_5 = mysql_fetch_array($result13);
			//q14
			$row14_1 = mysql_fetch_array($result14);
			$row14_2 = mysql_fetch_array($result14);
			$row14_3 = mysql_fetch_array($result14);
			$row14_4 = mysql_fetch_array($result14);
			$row14_5 = mysql_fetch_array($result14);
			//q15
			$row15_1 = mysql_fetch_array($result15);
			$row15_2 = mysql_fetch_array($result15);
			$row15_3 = mysql_fetch_array($result15);
			$row15_4 = mysql_fetch_array($result15);
			$row15_5 = mysql_fetch_array($result15);
		?>
		<script>
			function generatecsv() {
				window.location.href = "report.php";
			}
		</script>
	</head>
	
	<body>
		<div class="container">
			<br><br>
			<h3>Results of the survey</h3>
			<button type="button" onclick="generatecsv()">Generate CSV file</button>
			<br><br>
			<table class="table">
				<tr><td>1. Have you ever attended our conference before?</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=450x100&chd=t:<? echo $row1_1[1];?>,<? echo $row1_2[1];?>&chxt=x,y&chxl=0:|A|B&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>2. How did you hear or learn about this conference?</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=450x100&chd=t:<? echo $row2_1[1];?>,<? echo $row2_2[1];?>,<? echo $row2_3[1];?>,<? echo $row2_4[1];?>,<? echo $row2_5[1];?>&chxt=x,y&chxl=0:|A|B|C|D|E&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>3. Please specify the main reason for attending this conference?</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=450x100&chd=t:<? echo $row3_1[1];?>,<? echo $row3_2[1];?>,<? echo $row3_3[1];?>,<? echo $row3_4[1];?>,<? echo $row3_5[1];?>&chxt=x,y&chxl=0:|A|B|C|D|E&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>4. Did the conference fulfill your reason for attending?</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=450x100&chd=t:<? echo $row4_1[1];?>,<? echo $row4_2[1];?>,<? echo $row4_3[1];?>&chxt=x,y&chxl=0:|A|B|C&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>5. Would you recommend this conference to others?</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=450x100&chd=t:<? echo $row5_1[1];?>,<? echo $row5_2[1];?>&chxt=x,y&chxl=0:|A|B&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><th colspan="2"><br>Very Satisfied = 5, Somewhat Satisfied = 4, Neutral = 3, Somewhat Dissatisfied = 2, Dissatisfied = 1</th></tr> 
				<tr><td>6. Please rate the overall quality of the conference contents</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row6_5[1];?>,<? echo $row6_4[1];?>,<? echo $row6_3[1];?>,<? echo $row6_2[1];?>,<? echo $row6_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>7. Have you been able to interact with other conference participants</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row7_5[1];?>,<? echo $row7_4[1];?>,<? echo $row7_3[1];?>,<? echo $row7_2[1];?>,<? echo $row7_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>8. Please rate the efficiency of the registration process</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row8_5[1];?>,<? echo $row8_4[1];?>,<? echo $row8_3[1];?>,<? echo $row8_2[1];?>,<? echo $row8_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>9. Do you consider the venue of the conference siutable</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row9_5[1];?>,<? echo $row9_4[1];?>,<? echo $row9_3[1];?>,<? echo $row9_2[1];?>,<? echo $row9_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>10. How would you find the beverages and food provided in the conference</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row10_5[1];?>,<? echo $row10_4[1];?>,<? echo $row10_3[1];?>,<? echo $row10_2[1];?>,<? echo $row10_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>11. Would you consider to join this conference again next year</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row11_5[1];?>,<? echo $row11_4[1];?>,<? echo $row11_3[1];?>,<? echo $row11_2[1];?>,<? echo $row11_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>12. Please rate the convenience fo going to conference</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row12_5[1];?>,<? echo $row12_4[1];?>,<? echo $row12_3[1];?>,<? echo $row12_2[1];?>,<? echo $row12_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>13. Do you satisfy with the sessions' time</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row13_5[1];?>,<? echo $row13_4[1];?>,<? echo $row13_3[1];?>,<? echo $row13_2[1];?>,<? echo $row13_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>14. Please rate the efficiency of the leaving process</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row14_5[1];?>,<? echo $row14_4[1];?>,<? echo $row14_3[1];?>,<? echo $row14_2[1];?>,<? echo $row14_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
				<tr><td>15. Please rate the quality of this website</td><td><img src = "http://chart.apis.google.com/chart?cht=bvg&chs=1000x100&chd=t:<? echo $row15_5[1];?>,<? echo $row15_4[1];?>,<? echo $row15_3[1];?>,<? echo $row15_2[1];?>,<? echo $row15_1[1];?>&chxt=x,y&chxl=0:|5|4|3|2|1&chg=10,20&chm=N*f0*,000000,0,-1,11"/></td></tr>
			</table>
		</div>
	</body>
	
</html>
<?mysql_close();?>