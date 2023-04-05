<?php 
    if(!isset($_SESSION)){
		session_start();
	   }
	require('../models/usermodel.php');
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
        $_SESSION['a']=$username;
		$password = $_REQUEST['password'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];

		if($name != null && $username != null && $password != null && $phone != null && $email != null){

			$status = signup($name, $username, $password, $phone, $email);
			if($status){
				header('location: ../views/setup.php');			
			}else{
				header('location: ../views/register.php');
			}
	
			
		}else{
			echo "null submission";
		}
	}
?>