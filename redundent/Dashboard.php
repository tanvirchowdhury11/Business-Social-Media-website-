
<?php 
    session_start();

   //require ('status_dp');

   // if(isset($_SESSION['Name'])) { echo $_SESSION['Status'];}
 //   if(isset($_SESSION['Photo'])) { echo   $_SESSION['Photo'];} 

 //$status = $_POST['status'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname= "business_users";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
/////////////////////////////////////////////
 



   
//////////////////////////////////////////////////////////////
?>
<script>
    function validate()
    {

    var name = console.log(document.itemform.name.value);

    if(document.itemform.name.value=="")
    {
        alert("name cannot be empty");
        document.itemform.name.focus;
        return false;
    }
    return false;
    }
</script>
<!DOCTYPE html>
<html>

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

            <h1 align = left>Tanvir Chowdhury</h1><hr>
            <table  align="center" width="500px" >
                
            </table>
            <form method="POST" action="status_dp.php" >
        <fieldset>
        <legend><h3>POST ACCOUNCEMENT</h3></legend>
     
        Status: <input type="text" name="status" value="">
        <br><br>
      
        
        <input type="submit" name="submit" value="Post">


        </fieldset> <br>

        <form method="" action="">
        <fieldset>
        <legend><h3>RECENT POSTS</h3></legend>
        <p> Username, 08th Mar </p><br>
        <p>Our Company is hiring, looking for young candidates</p> <br>
        <input type="Button" name="Edt" value="Edit"> 
        <input type="Button" name="dlt" value="Delete"><br>

        <p> Username, 27 feb </p><br>
        <p>SALE SALE SALE % 50 OFF</p><br>
        <input type="Button" name="Edt" value="Edit"> 
        <input type="Button" name="dlt" value="Delete">


        </fieldset> 
        
        

    </form>


        </td>
    </tr>
    
    
</table>


</html>