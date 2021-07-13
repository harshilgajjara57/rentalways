<?php
    session_start();
    include("dbprocessor/connector.php");
    $pid=$_GET['pid'];
    $id=$_GET['id'];
    $str = "select * from property_detailes where id=".$id.";";
    $result = mysqli_query($conn,$str);
    if(mysqli_num_rows($result)<1)
    {
        header("location:manageproperties.php");
        exit();
    }
    $row = mysqli_fetch_array($result);
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
    <title>RentalWays - Edit Data</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
    <div class="container">
    <br>
    <form action="dbprocessor/editdata.php" method="POST">
                <input type="hidden" name="pid" value="<?php echo $pid;?>">
                <input type="hidden" name="id" value="<?php echo $row[0];?>">
                <div class="mb-3">
                    <label for="keyword" class="form-label">Keyword</label>
                    <input type="text" value="<?php echo $row[2]; ?>" class="form-control" name="keyword" id="keyword" aria-describedby="keyword" required>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">data</label>
                    <input type="text" value="<?php echo $row[3]; ?>" class="form-control" name="data" id="data" aria-describedby="data" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Additional Data</button>
            </form>
            <br>
            </div>
    <?php
        include("includes/footer.php");
    ?>
    <script src="assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>