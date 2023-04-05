<?php 
	if(!isset($_SESSION)){
		session_start();
	   }
	require_once('../models/usermodel.php');

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

			$status = login($username, $password);

				if($status){
					$_SESSION['status'] = true;
                    $_SESSION['b']= $username;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/dashboard.php');
				}else{
					header('location: ../views/login.php?msg=error');
				}
		}else{
			echo "Field is empty";
		}
	}
?>