<?php 

function connection(){

    $servername = "localhost";
    $dbuser = "root";
    $password = "";
    $dbname= "business_users";

// Create a connection
$con = mysqli_connect($servername, $dbuser, $password,$dbname);
return $con;

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
}
?>