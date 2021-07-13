<?php
    session_start();
    include("connector.php");
    $pid = $_POST['pid'];

    if(isset($_POST['editproperty']) && $_POST['editproperty']=="editproperty") {
        $prop_type = $_POST['prop_type'];
        $prop_deal = $_POST['prop_deal'];
        $prop_condition = $_POST['prop_condition'];
        $prop_avail = $_POST['prop_avail'];
        $prop_avail_type = $_POST['prop_avail_type'];
        $prop_location = $_POST['prop_loc'];

        $str = "UPDATE `properties` SET `property_type`='".$prop_type."',`property_deal`='".$prop_deal."',`property_condition`='".$prop_condition."',`property_availability`='".$prop_avail."',`property_availability_type`='".$prop_avail_type."',`location`='".$prop_location."' WHERE `id`=".$pid.";";
        $result = mysqli_query($conn,$str);

        if($result)
        {
            header("location:../manageproperties.php");
            exit();
        }
        else
        {
            header("location:../manageproperties.php");
            exit();
        }
    }
    else
    {
        header("location:../manageproperties.php");
        exit();
    }
?>