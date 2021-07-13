<?php

    session_start();
    
    include("connector.php");

    $pid = $_POST['pid'];

    date_default_timezone_set("Asia/Kolkata");

    $time=date("Y-m-d-H-i-s");

    foreach($_FILES["uploads"]["tmp_name"] as $key=>$tmp_name) {
        
        $file = $_FILES["uploads"]["name"][$key];             
        $image_info = explode(".", $file);
        $image_type = end($image_info);
        $filename = $time.$key.".".$image_type;
        $target = "../../assets/datas/".$filename;

        if(move_uploaded_file($_FILES["uploads"]["tmp_name"][$key], $target)) {
            $str = "INSERT INTO `property_stream_img`(`property_id`, `filename`) VALUES ('".$pid."','".$filename."')";
            $result = mysqli_query($conn,$str);
            if($result) { 
                //data inserted successfully 
            }
        }
    }

    header("location:../managestream.php?pid=$pid");
    exit();

?>