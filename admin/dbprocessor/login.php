<?php
    session_start();
    include("connector.php");
    if(isset($_POST['login']) && $_POST['login']=="login")
    {
        $un = $_POST['un'];
        $pw = $_POST['pw'];

        $q1 = "select * from admin where username='".$un."';";
        $q2 = mysqli_query($conn,$q1);
        if(mysqli_num_rows($q2)>0)
        {
            $row = mysqli_fetch_assoc($q2);
            if($row['password'] == $pw)
            {
                $_SESSION['root_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("location:../");
                exit();
            }
            else
            {
                $_SESSION['loginmessage'] = "password is wrong";
            header("location:../login.php");
            exit();
            }
        }
        else
        {
            $_SESSION['loginmessage'] = "username not found";
            header("location:../login.php");
            exit();
        }
        
    }
    else
    {
        $_SESSION['loginmessage'] = "undefined error";
        header("location:../login.php");
        exit();
    }
?>