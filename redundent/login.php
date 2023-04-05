<html>
<head>
	<title>Login</title>
</head>
<body>
<fieldset>
	<form method="POST" action="../controllers/loginCheck.php">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td>Dont have an account?</td>
				<td><a href="register.php"> register </td>
			</tr>


		</table>
	</form>
	</fieldset>
</body>
</html>