<?php
if(!isset($_SESSION)){
    session_start();
   }
    require_once('../models/connection.php');
    $username=$_POST['username'];

    $con=connection();
    $sql = "SELECT * FROM post ORDER BY time DESC";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
            $notifytime= $row['time'];
            $postv= $row['postv'];
            $postt= $row['ptitle'];
            $postd= $row['pdesc'];
            
            $provider= $row['provider'];
            if ($username == $row['provider']) {
                echo "<div class="."post".">";
                echo "<h7>"."You posted an announcement | ".date('F j, Y. g:i a', strtotime($notifytime))."</h7>";
                echo "<hr>";
                echo "<h6>".$row['ptitle']."</h6>";
                echo "<h5>".$row['pdesc']."</h5>";
                echo "<hr>";
              
                echo "<hr>";
                echo "<a href=".'../views/editpost.php?postid='.$postv.'&amp;posttitle='.urlencode($postt).'&amp;postdesc='.urlencode($postd).'&amp;postrate='.urlencode($postr)."> Edit </a>";
                echo "<a id=delete href=".'../controllers/deletepost.php?postid='.$postv."> Delete </a>";
                echo "</div>";
            }
            else {
            echo "<div class="."post".">";
            echo "<h7>".$row['provider']." posted a service | ".date('F j, Y. g:i a', strtotime($notifytime))."</h7>";
            echo "<hr>";
            echo "<h6>".$row['ptitle']."</h6>";
            echo "<h5>".$row['pdesc']."</h5>";
            echo "<hr>";
            
            echo "<hr>";
            
            }
    }
?>