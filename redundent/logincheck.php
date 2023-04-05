<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			$file_User = fopen('../models/user.txt','r');
			$file_Admin = fopen('../models/admin.txt','r');
			

			while(!feof($file_User))
			{		
				$user1 = fgets($file_User);
				$userArray1= explode('|',$user1);

				if(trim($userArray1[1]) == $username && trim($userArray1[2]) == $password){
				$_SESSION['status'] = true;
				$_SESSION['current_user'] = $userArray1;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/home.php?id=1');
				}
			}

			while(!feof($file_Admin))
			{		
				$user2 = fgets($file_Admin);
				$userArray2= explode('|',$user2);

				if(trim($userArray2[1]) == $username && trim($userArray2[2]) == $password)
				{
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArray2;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/home.php?id="2"');
				}
			}

			echo "invalid";

		}else{
			echo "null submission";
		}
	}
?>