<?php

    session_start();
    if(isset($_COOKIE['status']))
    {
        if(isset($_REQUEST['submitChangePass']))
        {
            $currentPassword = $_REQUEST['currentPassword'];
            $newPassword = $_REQUEST['newPassword'];
            $retypePassword = $_REQUEST['retypePassword'];

            if($currentPassword != null && $newPassword != null && $retypePassword != null)
            {
                $user = $_SESSION['user'];

                if($user['password'] == $currentPassword)
                {
                    if($newPassword == $retypePassword)
                    {
                        $_SESSION['user']['password'] = $newPassword;
                        header('Location:home.php');
                    }
                    else {
                        echo "Password does not match";
                    }
                }
                else {
                    echo "Incorrect Password";
                }
            }
        }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>

    <fieldset>
        <legend>CHANGE PASSWORD</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Current password :</td>
                    <td><input type="password" name="currentPassword" value=""></td>
                </tr>
                <tr>
                    <td>New password :</td>
                    <td><input type="password" name="newPassword" value=""></td>
                </tr>
                <tr>
                    <td>Re-type password :</td>
                    <td><input type="password" name="retypePassword" value=""></td>
                </tr>
                <tr> </tr>
                <tr> 
                    <td><input type="submit" name="submitChangePass" value="Submit"></td>
                </tr>
                
            </table>
        </form>

</body>
</html>

<?php
}
else {
    echo 'Please log in first';
}