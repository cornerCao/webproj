<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
		<title>Survey</title>
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/common.css" rel="stylesheet">
		<title>Survey</title>
		<style type="text/css">
			textarea {
				min-height: 110px;
				min-width: 600px;
			}
			
			#email {
				width: 300px;
			}
		</style>
		<?
			$active="conference";
			include_once "helper/nav.php";
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<script type="text/javascript">
			function validate(){
				var msg = "";
				var REemail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				var email = document.getElementById("email").value;
				var q16 = document.getElementById("q16").value;
				var q17 = document.getElementById("q17").value;
				
				if($('input[type="radio"]:checked').length != 15){
					msg += "Please answer all MC questions.\n\n";
				} 
				if(q16.length == 0 || q17.length == 0) {
					msg += "Please answer all open-end questions.\n\n";
				}
				if(email.length == 0) {
					msg += "Please enter your email.";
				} else if (!REemail.test(email)){
					msg += "Please enter your email with correct format (e.g. 123@123.com)";
				}
				if(msg != "") {
					alert(msg);
					return false;
				}
				else {
					return true;
				}
			}
			function viewresults() {
				window.location.href = "login.php";
			}
		</script>
	</head>
	
	<body>
	<div class="back">
		<a href="./conference.php"><span class="glyphicon glyphicon-chevron-left"></span></a>
	</div>
		<br><br>
		<div class="container">
			<h1>Online Survey</h1>
			<h4><font color="red">*Please complete all questions!</font></h4>
			<form name="form" id="form" onsubmit="return validate()" action="surveyComplete.php" method="POST">
				<table class="table">
					<tr><th>1. Have you ever attended our conference before?</th></tr>
					<tr><td><input type="radio" name="q1" value="A"/>A. Yes　　
							<input type="radio" name="q1" value="B"/>B. No</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><th>2. How did you hear or learn about this conference?</td></tr>
					<tr><td><input type="radio" name="q2" value="A"/>A. Ad in [PRINT MATERIAL]</td></tr>
					<tr><td><input type="radio" name="q2" value="B"/>B. Conference Website</td></tr>
					<tr><td><input type="radio" name="q2" value="C"/>C. Referral</td></tr>
					<tr><td><input type="radio" name="q2" value="D"/>D. Email/Newsletter</td></tr>
					<tr><td><input type="radio" name="q2" value="E"/>E. Social Media</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><th>3. Please specify the main reason for attending this conference?</td></tr>
					<tr><td><input type="radio" name="q3" value="A"/>A. Content</td></tr>
					<tr><td><input type="radio" name="q3" value="B"/>B. Networking</td></tr>
					<tr><td><input type="radio" name="q3" value="C"/>C. Personal growth & development</td></tr>
					<tr><td><input type="radio" name="q3" value="D"/>D. Speakers</td></tr>
					<tr><td><input type="radio" name="q3" value="E"/>E. Other</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><th>4. Did the conference fulfill your reason for attending?</td></tr>
					<tr><td><input type="radio" name="q4" value="A"/>A. Yes - Absolutelu</td></tr>
					<tr><td><input type="radio" name="q4" value="B"/>B. Yes - But not to my full extent</td></tr>
					<tr><td><input type="radio" name="q4" value="C"/>C. No</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><th>5. Would you recommend this conference to others?</td></tr>
					<tr><td><input type="radio" name="q5" value="A"/>A. Yes　　
							<input type="radio" name="q5" value="B"/>B. Maybe</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>
						<table id="mcTable" class="table">
							<tr><th colspan="2">Multiple Choice: <br>Very Satisfied = 5, Somewhat Satisfied = 4, Neutral = 3, Somewhat Dissatisfied = 2, Dissatisfied = 1</th></tr> 
							<tr><th>6. Please rate the overall quality of the conference contents</th>
								<td><input type="radio" name="q6" value="Very Satisfied"/>5　
									<input type="radio" name="q6" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q6" value="Neutral"/>3　
									<input type="radio" name="q6" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q6" value="Dissatisfied"/>1</td></tr>
							<tr><th>7. Have you been able to interact with other conference participants</th>
								<td><input type="radio" name="q7" value="Very Satisfied"/>5　
									<input type="radio" name="q7" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q7" value="Neutral"/>3　
									<input type="radio" name="q7" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q7" value="Dissatisfied"/>1</td></tr>
							<tr><th>8. Please rate the efficiency of the registration process</th>
								<td><input type="radio" name="q8" value="Very Satisfied"/>5　
									<input type="radio" name="q8" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q8" value="Neutral"/>3　
									<input type="radio" name="q8" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q8" value="Dissatisfied"/>1</td></tr>
							<tr><th>9. Do you consider the venue of the conference siutable</th>
								<td><input type="radio" name="q9" value="Very Satisfied"/>5　
									<input type="radio" name="q9" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q9" value="Neutral"/>3　
									<input type="radio" name="q9" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q9" value="Dissatisfied"/>1</td></tr>
							<tr><th>10. How would you find the beverages and food provided in the conference</th>
								<td><input type="radio" name="q10" value="Very Satisfied"/>5　
									<input type="radio" name="q10" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q10" value="Neutral"/>3　
									<input type="radio" name="q10" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q10" value="Dissatisfied"/>1</td></tr>
							<tr><th>11. Would you consider to join this conference again next year</th>
								<td><input type="radio" name="q11" value="Very Satisfied"/>5　
									<input type="radio" name="q11" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q11" value="Neutral"/>3　
									<input type="radio" name="q11" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q11" value="Dissatisfied"/>1</td></tr>
							<tr><th>12. Please rate the convenience fo going to conference</th>
								<td><input type="radio" name="q12" value="Very Satisfied"/>5　
									<input type="radio" name="q12" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q12" value="Neutral"/>3　
									<input type="radio" name="q12" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q12" value="Dissatisfied"/>1</td></tr>
							<tr><th>13. Do you satisfy with the sessions' time</th>
								<td><input type="radio" name="q13" value="Very Satisfied"/>5　
									<input type="radio" name="q13" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q13" value="Neutral"/>3　
									<input type="radio" name="q13" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q13" value="Dissatisfied"/>1</td></tr>
							<tr><th>14. Please rate the efficiency of the leaving process</th>
								<td><input type="radio" name="q14" value="Very Satisfied"/>5　
									<input type="radio" name="q14" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q14" value="Neutral"/>3　
									<input type="radio" name="q14" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q14" value="Dissatisfied"/>1</td></tr>
							<tr><th>15. Please rate the quality of this website</th>
								<td><input type="radio" name="q15" value="Very Satisfied"/>5　
									<input type="radio" name="q15" value="Somewhat Satisfied"/>4　
									<input type="radio" name="q15" value="Neutral"/>3　
									<input type="radio" name="q15" value="Somewhat Dissatisfied"/>2　
									<input type="radio" name="q15" value="Dissatisfied"/>1</td></tr>
						</table>
					</td></tr>
					<tr><th>16. Which keynote presentation you like most?</th></tr>
					<tr><td><textarea name="q16" id="q16"></textarea></td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><th>17. Which parallel session paper you like most?</th></tr>
					<tr><td><textarea name="q17" id="q17"></textarea></td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><th>Please enter your email:</th></tr>
					<tr><td><input type="text" name="email" id="email"/></td></tr>
				</table>
				<br/>
				<input class="blueButton" type="submit" value="Submit" />
				<input class="blueButton" type="reset"  value="Reset"/>
				<input class="blueButton" type="button" value="View Results" onclick="viewresults()"/>
			</form>
		</div>
	</body>
</html>