<?php 
    session_start();
    if(isset($_COOKIE['status'])){
        if(isset($_REQUEST['submitEmail']))
        {
            $email = $_REQUEST['email'];

            if($email != null)
            {
                $user = $_SESSION['user'];

                if($user['email'] == $email)
                {
                    header('Location:recoverPassword.php');
                }
                else {
                    echo "Incorrect email";
                }
            }
            echo "Something is wrong";
        }
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <fieldset>
        <legend>FORGET PASSWORD</legend>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Enter Email :</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submitEmail" value="Submit"></td>
                </tr>
            </table>
        </form>
</body>
</html>

<?php
    }else
    {
        echo "Incorrect email";
    }
?>