<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
</head>
<body>
    <form method="post" action="dbprocessor/login.php">
    <?php if(isset($_SESSION['loginmessage'])) { ?><label style="color:red"><?php echo $_SESSION['loginmessage'];echo "<br>"; ?></label><?php } ?>
        username:<input type="email" name="un" required><br>
        password:<input type="password" name="pw" required><br>
        <input type="submit" name="login" value="login">
        <?php session_destroy(); ?>
    </form>
</body>
</html>