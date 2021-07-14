<?php
    if(!isset($_SESSION['root_id']))
    {
        header("location:login.php");
        exit();
    }
?>