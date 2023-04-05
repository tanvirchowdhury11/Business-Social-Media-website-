<?php 

	require_once('connection.php');


	function login($username, $password){
		$con = connection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($name, $username, $password, $phone, $email){
		$con = connection();
		$sql = "insert into users (name, username, password, phone, email) values('{$name}','{$username}', '{$password}', '{$phone}', '{$email}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }

	function additem($name, $description, $price, $image) {

        $con=connection();
        $sql = "INSERT INTO items (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image')";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

    function profile($username, $image, $category, $about) {

        $con=connection();
        $sql = "INSERT INTO account (username, category, image, about) VALUES ('$username', '$category', '$image', '$about')";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

    function pupdate($uname, $uimage, $ufname, $ubio) {

        $con=connection();
        $sql = "UPDATE `profile` SET fname='{$ufname}', images='{$uimage}', bio='{$ubio}' where uname='{$uname}'";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function post($username, $ptitle, $pdesc) {

        $con=connection();
        $sql = "INSERT INTO post (provider, ptitle, pdesc) VALUES ('$username', '$ptitle', '$pdesc')";

    	if(mysqli_query($con, $sql)){
			return true;

		}else{
			return false;
		}

    }

	function editpost($postv, $ptitle, $pdesc, $rate) {

        $con=connection();
        $sql = "UPDATE `post` SET ptitle='{$ptitle}', pdesc='{$pdesc}', rate='{$rate}' where postv='{$postv}'";      

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function delpost($postv) {

        $con=connection();
        $sql = "DELETE FROM `post` where postv='{$postv}'" ;

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

	function notify($buyer, $postt, $provider, $rate) {

        $con=getConnection();
        $sql = "INSERT INTO request (buyer, provider, postt, rate) VALUES ('$buyer', '$provider', '$postt', '$rate')" ;

    	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

    }

?>