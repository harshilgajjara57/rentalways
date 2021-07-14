<?php
    session_start();
    include("dbprocessor/sessioncheck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/css/main.css">
    <title>RentalWays - Dashboard</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
    <?php
        include("includes/footer.php");
    ?>
    <script src="assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("dashboard").className += " active";
    </script>
</body>
</html>