<html>
	<head>
		<meta charset="UTF-8">
		<title>Survey</title>
		<style type="text/css">
			textarea {
				min-height: 80px;
				min-width: 400px;
			}
			
			#email {
				width: 300px;
			}
			#mcTable {
				border: 1px solid black;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<script type="text/javascript">
			function validate(){
				var msg = "";
				var REemail = /^[\w]+(\.[\w]+)*@([\w\-]+\.)+[a-zA-Z]{2,7}$/;
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
		</script>
	</head>
	
	<body>
		<h1>Online Survey</h1>

		<form name="form" id="form" onsubmit="return validate()" action="surveyComplete.php" method="POST">
			<table>
				<tr><td>*1. Have you ever attended our conference before?<br/>　(If yes, please specify which year)</td></tr>
				<tr><td><input type="radio" name="q1" value="A"/>A. Yes　　
						<input type="radio" name="q1" value="B"/>B. No</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>*2. How did you hear or learn about this conference?</td></tr>
				<tr><td><input type="radio" name="q2" value="A"/>A. Ad in [PRINT MATERIAL]</td></tr>
				<tr><td><input type="radio" name="q2" value="B"/>B. Conference Website</td></tr>
				<tr><td><input type="radio" name="q2" value="C"/>C. Referral</td></tr>
				<tr><td><input type="radio" name="q2" value="D"/>D. Email/Newsletter</td></tr>
				<tr><td><input type="radio" name="q2" value="E"/>E. Social Media</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>*3. Please specify the main reason for attending this conference?</td></tr>
				<tr><td><input type="radio" name="q3" value="A"/>A. Content</td></tr>
				<tr><td><input type="radio" name="q3" value="B"/>B. Networking</td></tr>
				<tr><td><input type="radio" name="q3" value="C"/>C. Personal growth & development</td></tr>
				<tr><td><input type="radio" name="q3" value="D"/>D. Speakers</td></tr>
				<tr><td><input type="radio" name="q3" value="E"/>E. Other</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>*4. Did the conference fulfill your reason for attending?</td></tr>
				<tr><td><input type="radio" name="q4" value="A"/>A. Yes - Absolutelu</td></tr>
				<tr><td><input type="radio" name="q4" value="B"/>B. Yes - But not to my full extent</td></tr>
				<tr><td><input type="radio" name="q4" value="C"/>C. No</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>*5. Would you recommend this conference to others?</td></tr>
				<tr><td><input type="radio" name="q5" value="A"/>A. Yes　　
						<input type="radio" name="q5" value="B"/>B. Maybe</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>
					<table id="mcTable">
						<tr><td colspan="2">Very Satisfied = 5, Somewhat Satisfied = 4, Neutral = 3,</td></tr> 
						<tr><td colspan="2">Somewhat Dissatisfied = 2, Dissatisfied = 1</td></tr>
						<tr><td>*6. XXX　　　</td>
							<td><input type="radio" name="q6" value="Very Satisfied"/>5
								<input type="radio" name="q6" value="Somewhat Satisfied"/>4
								<input type="radio" name="q6" value="Neutral"/>3
								<input type="radio" name="q6" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q6" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*7. XXX　　　</td>
							<td><input type="radio" name="q7" value="Very Satisfied"/>5
								<input type="radio" name="q7" value="Somewhat Satisfied"/>4
								<input type="radio" name="q7" value="Neutral"/>3
								<input type="radio" name="q7" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q7" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*8. XXX　　　</td>
							<td><input type="radio" name="q8" value="Very Satisfied"/>5
								<input type="radio" name="q8" value="Somewhat Satisfied"/>4
								<input type="radio" name="q8" value="Neutral"/>3
								<input type="radio" name="q8" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q8" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*9. XXX　　　</td>
							<td><input type="radio" name="q9" value="Very Satisfied"/>5
								<input type="radio" name="q9" value="Somewhat Satisfied"/>4
								<input type="radio" name="q9" value="Neutral"/>3
								<input type="radio" name="q9" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q9" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*10. XXX　　　</td>
							<td><input type="radio" name="q10" value="Very Satisfied"/>5
								<input type="radio" name="q10" value="Somewhat Satisfied"/>4
								<input type="radio" name="q10" value="Neutral"/>3
								<input type="radio" name="q10" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q10" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*11. XXX　　　</td>
							<td><input type="radio" name="q11" value="Very Satisfied"/>5
								<input type="radio" name="q11" value="Somewhat Satisfied"/>4
								<input type="radio" name="q11" value="Neutral"/>3
								<input type="radio" name="q11" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q11" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*12. XXX　　　</td>
							<td><input type="radio" name="q12" value="Very Satisfied"/>5
								<input type="radio" name="q12" value="Somewhat Satisfied"/>4
								<input type="radio" name="q12" value="Neutral"/>3
								<input type="radio" name="q12" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q12" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*13. XXX　　　</td>
							<td><input type="radio" name="q13" value="Very Satisfied"/>5
								<input type="radio" name="q13" value="Somewhat Satisfied"/>4
								<input type="radio" name="q13" value="Neutral"/>3
								<input type="radio" name="q13" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q13" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*14. XXX　　　</td>
							<td><input type="radio" name="q14" value="Very Satisfied"/>5
								<input type="radio" name="q14" value="Somewhat Satisfied"/>4
								<input type="radio" name="q14" value="Neutral"/>3
								<input type="radio" name="q14" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q14" value="Dissatisfied"/>1</td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>*15. XXX　　　</td>
							<td><input type="radio" name="q15" value="Very Satisfied"/>5
								<input type="radio" name="q15" value="Somewhat Satisfied"/>4
								<input type="radio" name="q15" value="Neutral"/>3
								<input type="radio" name="q15" value="Somewhat Dissatisfied"/>2
								<input type="radio" name="q15" value="Dissatisfied"/>1</td></tr>
					</table>
				</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>16. XXX</td></tr>
				<tr><td><textarea name="q16" id="q16"></textarea></td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>17. XXX</td></tr>
				<tr><td><textarea name="q17" id="q17"></textarea></td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td>*Please enter your email:</td></tr>
				<tr><td><input type="text" name="email" id="email"/></td></tr>
			</table>
			<br/>
			<input type="submit" value="Submit" />
			<input type="reset"  value="Reset"/>
			<input type="button" value="Generate Report"/>
		</form>
	</body>
</html>