<?php
    session_start();
    $username=$_SESSION['username'];
    $img=$_SESSION['immagine_profilo'];
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
    $query="SELECT* FROM USERS WHERE username='".$username."'";
    $res=mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    mysqli_close($conn);
    echo json_encode($row);
?>