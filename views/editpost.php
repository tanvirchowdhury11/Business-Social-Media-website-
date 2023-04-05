<?php
if(!isset($_SESSION)) {
    session_start();
    if ($_SESSION['b'] == null) {
        header('location: ../views/login.php');
    }
}
?>

<html>

<head>
    <title>Edit Your Profile</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter" rel="stylesheet">
    <link href="editpost.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div class="form" align="center">
        <h2>Update Your Post</h2>
        <form name="epform" action="../controllers/postedit.php" method="post" onsubmit="return evalid()">
            <input type="text" name="postid" value="<?= $_GET['postid']; ?>" hidden>
            <div>
            <label>Post Title</label> <br>
            <input type="text" name="title" value="<?= $_GET['posttitle']; ?>" onkeyup="typing()">
            <p class="warn" id="msg1"></p>
            </div>
            <div>
            <label>Post Description</label> <br>
            <input type="text" name="pdesc" value="<?= $_GET['postdesc']; ?>" onkeyup="typing()">
            <p class="warn" id="msg2"></p>
            </div>
            <div>
            <label>Post Charge (Dollar)</label> <br>
            <input type="number" name="charge" value="<?= $_GET['postrate']; ?>" onkeyup="typing()" onchange="typing()">
            <p class="warn" id="msg3"></p>
            </div>
            <input type="submit" name="submit" value="Save Changes">
            <br>
            <a href="home.php">Go Back</a>
        </form>
    </div>
</body>

</html>