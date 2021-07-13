<?php
    session_start();
    include("dbprocessor/connector.php");
    $pid=$_GET['pid'];
    $str = "select * from property_detailes where property_id=".$pid.";";
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
    <title>RentalWays - ManageData</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
    <div class="container">
    <br>
    <form action="dbprocessor/adddata.php" method="POST">
                <input type="hidden" name="pid" value="<?php echo $pid;?>">
                <div class="mb-3">
                    <label for="keyword" class="form-label">Keyword</label>
                    <input type="text" class="form-control" name="keyword" id="keyword" aria-describedby="keyword" required>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">data</label>
                    <input type="text" class="form-control" name="data" id="data" aria-describedby="data" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Additional Data</button>
            </form>
            <br>
            <table class="table table-hover">
            <thead>
                <tr>
                    <td>keyword</td>
                    <td>data</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                    <td><?php echo $row['keyword']; ?></td>
                    <td><?php echo $row['data']; ?></td>
                    <td><a href="editdata.php?id=<?php echo $row['id']; ?>&pid=<?php echo $pid; ?>">Edit</a></td>
                    <td><a href="dbprocessor/deletekeyword.php?id=<?php echo $row['id']; ?>&pid=<?php echo $pid; ?>">Delete</a></td>
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