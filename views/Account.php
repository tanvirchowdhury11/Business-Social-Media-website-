<?php 
    session_start();

    if(!isset($_SESSION)){
    session_start();
   }
    

    require_once('../models/connection.php');
   // $username=$_POST['username'];
    $username= $_SESSION['b'];

    $con=connection();

?>
<!DOCTYPE html>
<html>
<script type="text/javascript" src="script.js"></script>

<table width = 100%;>
    <tr height = 100px style ="background-color:#ADD8E6 ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="CompanyLogo.png">
        </td>
        <td align = center >
        <h1>Store</h1>
    </td>

        <td align = center >
            <table >
                
                <tr style ="font-size:20px;">
                    
                    <td><a href="#"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr  height = 700px>
        <td width =15% bgcolor="#ADD8E6" valign="top" align="center">
           
           <h1>Welcome </h1><br>

           
         <li><a href="Store.php"> Store </a></li><br> 

          <li><a href="Dashboard.php"> Dashboard </a></li><br> 

           
       </td>
        </td>
        
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = left><?= $_SESSION['b']; ?></h1><hr>
             <?php
            $sql = "SELECT * FROM account where username='{$username}'";

    $result= mysqli_query($con, $sql);

    while ($row=mysqli_fetch_assoc ($result)) {
        echo "<img src='../assets/".$row['image']."'>";
       // echo "<h2>".$row['username']."</h2>";
        echo "<h2>"."Business User"."</h2>";
        //echo "ABOUT";
        //echo "<p>".$row['about']."</p>";
    }



            ?>
            <hr>

            <table  align="center" width="500px" >
                
            </table>
            <form method="" action="">
        <fieldset>
        <legend><h3>Account Details</h3></legend>
        <table>
            <tr>
                <td>


                    <p>Name: Tanvir Chowdhury</p><br>

                    <p>Phone: 01625587172</p><br>

                    <p>Email: tanvirtc11@gmail.com</p><br>
            <?php
            $sql = "SELECT * FROM account where username='{$username}'";

    $result= mysqli_query($con, $sql);

    while ($row=mysqli_fetch_assoc ($result)) {
       // echo "<img src='../assets/".$row['image']."'>";
        //echo "<h2>".$row['username']."</h2>";
       // echo "<h2>"."Business User"."</h2>";
        echo "ABOUT";
        echo "<p>".$row['about']."</p>";
    }



            ?>


            
                       

        Edit Information 
        <input type="button" name="btn" value="Edit">
        <br><br>
        Change Profile Picture 
        <input type="file" name="" value=""><br>  
        <input type="submit" name="submit" value="Upload">

                </td>

            </tr>
        </table>

        </fieldset> <br>

        

        </td>
    </tr>
    
    
</table>


</html>


<?php
/*if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/connection.php');
    $username=$_POST['username'];

    $con=connection();
    $sql = "SELECT * FROM account where username='{$username}'";

    $result= mysqli_query($con, $sql);

    while ($row=mysqli_fetch_assoc ($result)) {
        echo "<img src='../assets/".$row['image']."'>";
        echo "<h6>".$row['username']."</h6>";
        echo "<h5>"."Service Provider"."</h5>";
        echo "<p id='profiled'>".$row['about']."</p>";
    }
        
?>*/