<?php 
if(!isset($_SESSION)){
    session_start();
   }
	require_once('../models/usermodel.php');
    $postv=$_GET['postid'];

		if($postv != null){

			$status = delpost($postv);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/home.php');
				}else{
					header('location: ../views/home.php?msg=error');
				}

	}
?>