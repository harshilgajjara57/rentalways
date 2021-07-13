<?php
    session_start();
    include("connector.php");

    if(isset($_POST['addproperty']) && $_POST['addproperty']=="addproperty") {
        $prop_type = $_POST['prop_type'];
        $prop_deal = $_POST['prop_deal'];
        $prop_condition = $_POST['prop_condition'];
        $prop_avail = $_POST['prop_avail'];
        $prop_avail_type = $_POST['prop_avail_type'];
        $prop_location = $_POST['prop_loc'];

        $str = "INSERT INTO `properties`(`property_type`, `property_deal`, `property_condition`, `property_availability`, `property_availability_type`, `location`) VALUES ('".$prop_type."','".$prop_deal."','".$prop_condition."','".$prop_avail."','".$prop_avail_type."','".$prop_location."')";

        $result = mysqli_query($conn,$str);

        if($result)
        {
            header("location:../addproperties.php");
            exit();
        }
        else
        {
            header("location:../addproperties.php");
            exit();
        }
    }
    else
    {
        header("location:../addproperties.php");
        exit();
    }
?>