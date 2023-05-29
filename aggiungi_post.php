<?php
    session_start();
    $username=$_SESSION['username'];
    $commento=$_POST['commento'];
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
    $query="INSERT INTO POST (username, commento) VALUES('".$username."', '".$commento."')";
    mysqli_query($conn, $query);
    mysqli_close($conn);  
?>