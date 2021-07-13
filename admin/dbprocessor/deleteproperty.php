<?php
    session_start();
    include("connector.php");
    $str = "delete from properties where id=".$_GET['pid'].";";
    $str1 = "delete from property_detailes where property_id=".$_GET['pid'].";";
    $str2 = "delete from property_stream_img where property_id=".$_GET['pid'].";";

    $df = "select * from property_stream_img where property_id=".$_GET['pid'].";";
    $result3 = mysqli_query($conn,$df);
    while($row=mysqli_fetch_assoc($result3))
    {
        unlink("../../assets/datas/".$row['filename']);
    }

    $result = mysqli_query($conn,$str);
    $result1 = mysqli_query($conn,$str1);
    $result2 = mysqli_query($conn,$str2);

    header("location:../manageproperties.php");
    exit()
?>