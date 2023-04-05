<?php 
	if(!isset($_SESSION)){
		session_start();
	   }
	include('../models/usermodel.php');
	$username = $_SESSION['a'];
	
	if(isset($_REQUEST['submit'])){

        $target = "../assets/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $name=$_POST['name'];
        $description=$_POST['description'];
		$price=$_POST['price'];

		if($image != null && $name != null && $description != null){

			move_uploaded_file($_FILES['image']['tmp_name'], $target);
			$status = additem($name,$description, $price,  $image);
			if($status){
				header('location: ../views/store.php');			
			}else{
				header('location: ../views/additem.php');
			}
			
		}else{
			echo "Field is empty";
		}
	}
?>