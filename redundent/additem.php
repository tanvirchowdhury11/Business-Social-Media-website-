<?php 
    session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "store";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

//$name;
//$description;
//$price; 

// Sql query to be executed
//$sql = "INSERT INTO `items` (`Serial`, `Name`, `Description`, `Price`) VALUES ('', '$name', '$description', '$price')";
//$result = mysqli_query($conn, $sql);

// Add in the database
/*if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}*/

//$sql = "INSERT INTO `items` (`Serial`, `Name`, `Description`, `Price`) VALUES ('', 'Shoe', 'adidas football boot', '8000')";
//$result= mysqli_connect ($con,$sql);

//echo $_GET["name"];

?>
<!DOCTYPE html>
<html>
<script>
    function validate()
    {
        //var name= console.log(document.itemform.name.value);
        //var description= console.log(document.itemform.description.value);
        //var price= console.log(document.itemform.price.value);

       var name=console.log(document.itemform.name.value);
       var description=console.log(document.itemform.description.value);
       var price=console.log(document.itemform.price.value);
       

//AJAX
    /*  function ajax(){
            let username = document.getElementById('name').value;
            let http = new XMLHttpRequest();
            http.open('POST', 'store.php', true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send('uname='+username);
            document.getElementById('msg').innerHTML = "<img src='loading.gif' width='70px' height='70px'>";
            http.onreadystatechange = function(){
                
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('h1').innerHTML= this.responseText;
                    document.getElementById('msg').innerHTML = "";
                }
            }
        }*/

      /* if(document.itemform.name.lenght>5)
       {
        alert("name needs to be shorter");
        document.itemform.name.focus;
        return false;
       }*/

       if(document.itemform.name.value=="")
       {
        alert("name cannot be empty");
        document.itemform.name.focus;
        return false;
       }

       if(document.itemform.description.value=="")
       {
        alert("description cannot be empty");
        document.itemform.description.focus;
        return false;
       }

       if(document.itemform.price.value=="")
       {
        alert("price cannot be zero");
        document.itemform.price.focus;
        return false;
       }

        //if(name.value.lenght<=0)
        //{
            //alert("name is required")
        //}

        
        return false;
    }

 </script>

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

         <li><a href="Account.php"> Account Settings </li></a>
       </td>
        </td>
        
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = left>Tanvir Chowdhury</h1><hr>
            <table  align="center" width="500px" >
                
            </table>
            <form method="" action="POST" name ="itemform" onsubmit="return (validate())">
        <fieldset>
        <legend><h3>ADD PRODUCT</h3></legend>
        <table>
            <tr>
                <td>
                    Product Name: <input type="text" name="name" <br><br>
                    <br>
                    Product Description: <input type="text" name="description" ><br>
                    <br>
                    Price: <input type="text" name="price" ><br>
                    <br>
        Add Photo: <input type="file" name="" value="<?php if(isset($_SESSION['Photo'])) { echo   $_SESSION['Photo']; } ?> " readonly/><a href = "PHOTO.php" >Update</a><br>
        <input type="submit" name="submit" value="submit"> 

        Photo <input type="file" name="myimage" value="<?php if(isset($_SESSION['Photo'])) { echo   $_SESSION['Photo']; } ?> " readonly/><a href = "PHOTO.php" >Update</a><br>


        </td>   

                </td>

            </tr>
        </table>

        </fieldset> <br>

        

        </td>
    </tr>
    
    
</table>


</html>