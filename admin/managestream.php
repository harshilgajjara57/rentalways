<?php
    session_start();
    include("dbprocessor/sessioncheck.php");
    include("dbprocessor/connector.php");
    $id = $_GET['pid'];
    $str = "select * from property_stream_img where property_id=".$id.";";
    $result = mysqli_query($conn,$str);
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
    <title>RentalWays - Manage Stream</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
        <div class="container">
        <br>
            <form enctype="multipart/form-data" action="dbprocessor/addstream.php" method="POST">
                <input type="hidden" name="pid" value="<?php echo $id;?>">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Select Images</label>   
                    <input class="form-control" type="file" name="uploads[]" id="formFile" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Add Stream</button>
            </form>
            <br>
            <table class="table table-hover">
            <thead>
                <tr>
                    <td>image</td>
                    <td>delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td><img src="../assets/datas/<?php echo $row['filename']; ?>" width="150" height="100" alt="propertyimage"></td>
                    <td><a href="dbprocessor/deleteimage.php?iid=<?php echo $row['id']; ?>&pid=<?php echo $id; ?>">Delete</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
    <?php
        include("includes/footer.php");
    ?>
    <script src="assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>