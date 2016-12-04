<?php session_start();?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
		<title>Login</title>
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
			include_once "helper/nav.php";
		?>
		<?
			if(isset($_POST['adminid']) && isset($_POST['adminpw'])){
				$adminid = $_POST['adminid'];
				$adminpw = $_POST['adminpw'];
				
				$query = "SELECT adminid, adminpw FROM comp3421_reportaccount WHERE adminid = '".$adminid."' AND adminpw = '".$adminpw."' ";
				$result = mysql_query($query,$conn);
				
				if (mysql_num_rows($result) > 0) {
					$record = mysql_fetch_row($result);
					$_SESSION["adminid"] = $record[0];
					$_SESSION["adminpw"] = $record[1];
					header("Location: chart.php");
					//echo "<script>window.location.href('conference.php');</script>";
					//echo "Successful";
				} else {
					echo "<script>alert('Incorrect ID or Password');</script>";
				}
			}
		?>
	</head>
	
	<body>
		<div class="container">
			<div class="login">
				<br><br><br>
				<h3>Please login before generate the report</h3>
				<form id="loginform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<table class="table">
						<tr>
							<th>ID</th>
							<td><input type="text" name="adminid" id="adminid"></td>
						</tr>
						<tr>
							<th>Password</th>
							<td><input type="password" name="adminpw" id="adminpw"></td>
						</tr>
					</table>
					<button class="blueButton" type="submit">Login</button>
				</form>
			</div>
		</div>
	</body>
</html>
<?mysql_close();?>