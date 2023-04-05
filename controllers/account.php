<?php 
	if(!isset($_SESSION)){
		session_start();
	   }
	include('../models/usermodel.php');
	$username = $_SESSION['a'];
	
	if(isset($_REQUEST['submit'])){

        $target = "../assets/".basename($_FILES['pp']['name']);
        $image = $_FILES['pp']['name'];
        $category=$_POST['category'];
        $about=$_POST['about'];

		if($image != null && $category != null && $about != null){

			move_uploaded_file($_FILES['pp']['tmp_name'], $target);
			$status = profile($username, $image, $category, $about);
			if($status){
				header('location: ../views/login.php');			
			}else{
				header('location: ../views/setup.php');
			}
			
		}else{
			echo "Field is empty";
		}
	}
?>