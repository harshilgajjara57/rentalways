<?php
    session_start();
    include("dbprocessor/connector.php");
    $str = "select * from properties";
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
    <title>RentalWays - Manage Properties</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
    <div class="container-fluid">
    <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Property Type</td>
                    <td>Manage Imgs/Vids</td>
                    <td>Deal</td>
                    <td>Condition</td>
                    <td>Availability</td>
                    <td>Availability Type</td>
                    <td>location</rd>
                    <td>Manage Data</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $str1 = "select * from property_stream_img where property_id=".$row['id'].";";
                        $result1 = mysqli_query($conn,$str1);
                        $num1 = mysqli_num_rows($result1);

                        $str1 = "select * from property_detailes where property_id=".$row['id'].";";
                        $result1 = mysqli_query($conn,$str1);
                        $num2 = mysqli_num_rows($result1);
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['property_type']; ?></td>
                    <td><a href="managestream.php?pid=<?php echo $row['id']; ?>">Manage imgs/vids [ <?php echo $num1; ?> ]</a></td>
                    <td><?php echo $row['property_deal']; ?></td>
                    <td><?php echo $row['property_condition']; ?></td>
                    <td><?php echo $row['property_availability']; ?></td>
                    <td><?php echo $row['property_availability_type']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><a href="managedata.php?pid=<?php echo $row['id']; ?>">Manage Data [ <?php echo $num2; ?> ]</a></td>
                    <td><a href="editpropertydetailes.php?pid=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="dbprocessor/deleteproperty.php?pid=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br>
    </div>
    <?php
        include("includes/footer.php");
    ?>
    <script src="assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("properties").className += " active";
        document.getElementById("manageproperties").className += " active";
    </script>
</body>
</html>