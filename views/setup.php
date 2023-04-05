<?php
if(!isset($_SESSION)) {
    session_start();
    if ($_SESSION['a'] == null) {
        header('location: ../views/login.php');
    }
}
?>

<html>

<head>
    <title>Account Setup</title>
    
</head>

<body>
    <div align="center">
        <h1>ACCOUNT SETUP</h1>
        <div align="center">
        <img width = 100px; height = 100px src ="../assets/Companylogo.png" alt="Site Logo">
        <fieldset>
        <form name="onform" action="../controllers/account.php" enctype="multipart/form-data" method="post" onsubmit="return ovalid()">
            <p> Upload Profile Picture</p>
            <input type="file" name="pp" accept="image/*" onchange="typing()">
            <p class="warn" id="msg1"></p>
            <p> Enter Category
            <input type="text" name="category" placeholder="category-service/product" onkeyup="typing()">
            <p class="warn" id="msg2"></p>
            <p> Business Details
            <input type="text" name="about" placeholder="About your business" onkeyup="typing()">
            <p class="warn" id="msg3"></p>
            <input type="submit" name="submit" value="Done">
        </form>
        </fieldset> 
    </div>   
</body>

</html>