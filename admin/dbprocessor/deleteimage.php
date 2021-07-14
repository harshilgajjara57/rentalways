<?php
    session_start();
    include("connector.php");
    $id=$_GET['iid'];
    $pid=$_GET['pid'];
    $str1 = "SELECT * FROM `property_stream_img` WHERE `id`=".$id.";"; 
    $result1 = mysqli_query($conn,$str1);
    $row = mysqli_fetch_assoc($result1);
    unlink("../../assets/datas/".$row['filename']);

    $str = "DELETE FROM `property_stream_img` WHERE `id`=".$id.";";
    $result = mysqli_query($conn,$str);
    header("location:../managestream.php?pid=$pid");
    exit();
?>