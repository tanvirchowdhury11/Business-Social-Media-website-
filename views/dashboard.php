
<?php 
    session_start();

    if(!isset($_SESSION)) {
    session_start();
    if ($_SESSION['b'] == null) {
        header('location: ../views/login.php');
    }

    
}
require_once('../models/connection.php');
    $username= $_SESSION['b'];
    

    $con=connection();


?>

<!DOCTYPE html>
<html>
<span id="posts"></span>
<script type="text/javascript" src="script.js"></script>

<table width = 100%;>
    <tr height = 100px style ="background-color:#ADD8E6 ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="CompanyLogo.png">
        </td>
        <td align = center >
        <h1>Business Account</h1>
    </td>

        <td align = center >
            <table >
                
                <tr style ="font-size:20px;">
                    
                    <td><a href="login.php"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr  height = 700px>
        <td width =15% bgcolor="#ADD8E6" valign="top" align="center">
           
           <h1>Welcome </h1><br>

           
          <li><a href="#"> Notifications </a></li><br> 

           <li><a href="Store.php"> View Store </a></li> <br> 

           
           <li><a href="Account.php"> Account Settings </li></a>
       </td>
        </td>
        
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = left><?= $_SESSION['b']; ?> </h1><hr>
            <table  align="center" width="500px" >
                
            </table>
            <form name="pform" action="../controllers/postcheck.php" method="post" onsubmit="return pvalid()">
        <fieldset>
        <legend><h3>POST ACCOUNCEMENT</h3></legend>
     
        Subject: <input type="text" name="title" placeholder="Write subject" onkeyup="typing()" size="20">
                    <p class="warn" id="msg1"></p>

        Details: <input type="text" name="pdesc" placeholder="Write Your Service Details Here" onkeyup="typing()" size="50"></textarea>
                    <p class="warn" id="msg2"></p>
                   
                    <input type="submit" name="submit" value="Post">
                    <p class="warn" id="msg3"></p>
        <br><br>


      
      
        
       


        </fieldset> <br>
        




       


        
        <fieldset>
        <legend><h3>RECENT POSTS</h3></legend

        



        
    <?php   $sql = "SELECT * FROM post ";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
            
          
            $postt= $row['ptitle'];
            $postd= $row['pdesc'];
            
            $provider= $row['provider'];
            if ($username == $row['provider']) {
                echo "<div class="."post".">";
                //echo "<h7>"."You posted an announcement | "</h7>";
                echo "<hr>";
                echo "Subject";
                echo "<h2>".$row['ptitle']."</h2>";
                echo "Detail";
                echo "<h2>".$row['pdesc']."</h2>";
                echo "<hr>";
                }
                }

                ?>



        <span id="posts"></span>
            </div>  


        </fieldset> 
      



        </td>
    </tr>
    
    
</table>

 <input id="username" type="text" value="<?= $_SESSION['b']; ?>" >
    <script>
        window.addEventListener("load", myInit, true); function myInit(){ 
            ajax();
            ajaxx();
            ajaxxx();
            
        }; 


</html>