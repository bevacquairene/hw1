<?php
    session_start();
    $username=$_SESSION['username'];
    $foto=$_GET['foto'];
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
    $query="DELETE FROM PREFERITI WHERE username='".$username."' AND foto='".$foto."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
?>