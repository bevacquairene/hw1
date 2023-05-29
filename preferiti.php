<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
    $username=$_SESSION['username'];
    $foto=$_POST['foto'];
    $query0="SELECT * FROM PREFERITI WHERE username='".$username."' AND foto='".$foto."'";
    $res=mysqli_query($conn, $query0);
    $row=mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)==0){
        $query="INSERT INTO PREFERITI(username, foto) VALUES('".$username."', '".$foto."')";
        mysqli_query($conn, $query);
        mysqli_close($conn);    
    }
    
?>