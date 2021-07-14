<?php
    session_start();
    include("connector.php");
    $id = $_GET['id'];
    $pid = $_GET['pid'];

    $str = "DELETE FROM `property_detailes` WHERE `id`=".$id.";";
    $result = mysqli_query($conn,$str);
    if($result) {

    }

    header("location:../managedata.php?pid=$pid");
    exit();
?>