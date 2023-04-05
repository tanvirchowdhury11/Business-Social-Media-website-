<?php 
if(!isset($_SESSION)){
    session_start();
   }
	require_once('../models/usermodel.php');
    require_once ('../controllers/logincheck.php');
    $username = $_SESSION['b'];

	if(isset($_REQUEST['submit'])){
		
		$ptitle = $_REQUEST['title'];
		$pdesc = $_REQUEST['pdesc'];
        

		if($ptitle != null && $pdesc != null ){

			$status = post($username, $ptitle, $pdesc);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/dashboard.php');
				}else{
					header('location: ../views/dashboard.php?msg=error');
				}
		}else{
			echo "field is empty";
		}
	}
?>