<?php
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
    $specie=$_GET['specie'];
    $query="SELECT* FROM PAPPAGALLI WHERE specie='".$specie."'";
    $res=mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    mysqli_close($conn);
    echo json_encode($row);
?>