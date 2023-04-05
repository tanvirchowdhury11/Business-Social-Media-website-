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
 <img width = 100px; height = 100px src ="../assets/Companylogo.png" alt="Site Logo">
<h2> Create an account </h2>
<script type="text/javascript" src="script.js"></script>
<body>
	<fieldset>
	<form name="regform" action="../controllers/regcheck.php" method="post" >



		<table>

			

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" id="name" placeholder="Enter your full name" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="Enter your username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" placeholder="Enter your password" required></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"  id="phone" placeholder="Enter your phone no." required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" id="email" placeholder="Enter your email" required></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Register"></td>
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