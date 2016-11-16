<html>
	<body>
		<?php
			$server = "mysql.comp.polyu.edu.hk";
			$user = "13068412d";
			$password = "intukqio";
			$database = "13068412d";
			$conn = mysql_connect($server,$user,$password);
			
			mysql_select_db($database,$conn);
		
			$q1 = $_POST["q1"];
			$q2 = $_POST["q2"];
			$q3 = $_POST["q3"];
			$q4 = $_POST["q4"];
			$q5 = $_POST["q5"];
			$q6 = $_POST["q6"];
			$q7 = $_POST["q7"];
			$q8 = $_POST["q8"];
			$q9 = $_POST["q9"];
			$q10 = $_POST["q10"];
			$q11 = $_POST["q11"];
			$q12 = $_POST["q12"];
			$q13 = $_POST["q13"];
			$q14 = $_POST["q14"];
			$q15 = $_POST["q15"];
			$q15 = $_POST["q15"];
			$q16 = $_POST["q16"];
			$q17 = $_POST["q17"];
			$email = $_POST["email"];
			
			$dupemail = "SELECT email FROM comp3421_surveyanswers WHERE email = '$email'";
			$result = mysql_query($dupemail,$conn);
			$num_rows = mysql_num_rows($result);
			if($num_rows > 0) {
				echo "<h3>Email already exists, please try again!</h3>";
				exit;
			}
			else {
				echo '<h3>Successful to submit the survey! Thank you!</h3>';
				echo '<h4>Your answers:</h4>';
				echo '1. ' . $q1 . '<br/>';
				echo '2. ' . $q2 . '<br/>';
				echo '3. ' . $q3 . '<br/>';
				echo '4. ' . $q4 . '<br/>';
				echo '5. ' . $q5 . '<br/>';
				echo '6. ' . $q6 . '<br/>';
				echo '7. ' . $q7 . '<br/>';
				echo '8. ' . $q8 . '<br/>';
				echo '9. ' . $q9 . '<br/>';
				echo '10. ' . $q10 . '<br/>';
				echo '11. ' . $q11 . '<br/>';
				echo '12. ' . $q12 . '<br/>';
				echo '13. ' . $q13 . '<br/>';
				echo '14. ' . $q14 . '<br/>';
				echo '15. ' . $q15 . '<br/>';
				echo '16. ' . $q16 . '<br/>';
				echo '17. ' . $q17 . '<br/>';
				echo 'Your Email: ' . $email . '<br/>';
				$sql = "INSERT INTO comp3421_surveyanswers 
				(ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10,ans11,ans12,ans13,ans14,ans15,ans16,ans17,email)
				VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$email')";
				
				mysql_query($sql,$conn);
			}
		?>
		<br/>
		<input type="button" onclick="window.history.back()" value="Back to home page"/>
	</body>
</html>