<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

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

            <h1 align = left>User Name</h1><hr>
            <h1 align = left><img width = 200px; height = 200px src ="CompanyLogo.png"></h1><hr>

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