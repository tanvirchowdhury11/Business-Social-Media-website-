<?php
	session_start();


?>

<html>
<head>
	<title>Signup</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<div align="center">
<h1> REGISTER </h1>
</div>
<div align="center">
 <img width = 100px; height = 100px src ="CompanyLogo.png">
<h2> Create an account </h2>
<body>
	<fieldset>
	<form name="regform" action="../controllers/regcheck.php" method="post" onsubmit="return rvalid()">



		<table>

			

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" id="name" placeholder="Enter your full name"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="Enter your username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" placeholder="Enter your password"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"  id="phone" placeholder="Enter your phone no."></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" id="email" placeholder="Enter your email"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Register" class="btn" onsubmit="validateAndSubmit(this); return false;"></td>
			</tr>
			<tr>
				<td>Already have an account?</td>
				<td><a href="login.php"> Login </td>
			</tr>
		</table>

	</form>
	</fieldset> 
	</div>
</body>
</html>