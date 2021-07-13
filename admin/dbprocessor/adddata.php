<?php
    session_start();
    include("connector.php");
    $pid = $_POST['pid'];
    $keyword = $_POST['keyword'];
    $data = $_POST['data'];
    $str = "INSERT INTO `property_detailes`(`property_id`, `keyword`, `data`) VALUES ('".$pid."','".$keyword."','".$data."')";
    $result = mysqli_query($conn,$str);
    if($result) {}
    header("location:../managedata.php?pid=$pid");
    exit();
?>