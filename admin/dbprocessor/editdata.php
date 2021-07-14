<?php
    session_start();
    include("connector.php");
    echo $id = $_POST['id'];
    echo $pid = $_POST['pid'];
    echo $keyword = $_POST['keyword'];
    echo $data = $_POST['data'];
    $str = "UPDATE `property_detailes` SET `keyword`='".$keyword."',`data`='".$data."' WHERE `id`=".$id.";";
    $result = mysqli_query($conn,$str);
    header("location:../managedata.php?pid=$pid");
    exit();
?>