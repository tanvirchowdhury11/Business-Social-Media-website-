<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="script.js"></script>
</head>

<div align="center">
<h1> LOGIN </h1>
</div>
<div align="center">
 <img width = 100px; height = 100px src ="../assets/Companylogo.png" alt="Site Logo">

<body>
<fieldset>
	<form name="loginform" action="../controllers/logincheck.php" method="post" onsubmit="return lvalid()">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="enter username"  ></td>
				<p class="warn" id="msg1"></p>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="enter password"  ></td>
				<p class="warn" id="msg2"></p>

				<?php 
	          $error = "";
            	if(isset($_GET['msg'])){
	             	if($_GET['msg'] == 'error'){
		            	echo "<p class=".'warn'.">".'Invalid Username/Password'."</p>";
	            	}
            	}
            ?>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
			<tr>
				<td>Dont have an account?</td>
				<td><a href="register.php"> register </td>
			</tr>


		</table>
	</form>

	</fieldset>
	</div>
</body>
</html>