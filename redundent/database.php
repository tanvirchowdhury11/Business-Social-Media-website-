<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="business_users";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST))



$name= $_POST ['name'];
$username= $_POST ['username'];
$password= $_POST ['password'];
$phone= $_POST ['phone'];
$email= $_POST ['email'];


$sql="INSERT INTO `users`(`id`, `name`, `username`, `password`, `phone`, `email`) VALUES ('',$name','$username','$password','$phone','$email')";


$insert= mysqli_connect ($con,$sql);
if (!$insert)
{
	echo "Values not inserted into the database";
}
	else{
	echo "Data inserted intp database";

}



	


?>