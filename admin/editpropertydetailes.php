<?php
    session_start();
    include("dbprocessor/sessioncheck.php");
    include("dbprocessor/connector.php");
    $pid = $_GET['pid'];
    $str = "SELECT * FROM properties where id=".$pid.";";
    $result = mysqli_query($conn,$str);
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
    <title>RentalWays - Edit Properties</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
    <div class="container">
    <br><h1 class="display-6">Add Properties</h1><br>
    <form method="post" action="dbprocessor/updateproperty.php">
        <input type="hidden" name="editproperty" value="editproperty">
        <input type="hidden" name="pid" value="<?php echo $row[0]; ?>">
        <div class="mb-3">
            <label for="prop_type" class="form-label">Property Type</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_type">
                <option value="residential" <?php if($row[1]=="residential"){echo "selected";} ?>>Residential</option>
                <option value="commercial" <?php if($row[1]=="commercial"){echo "selected";} ?>>commercial</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_deal" class="form-label">Property Deal</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_deal">
                <option value="Rent" <?php if($row[2]=="Rent"){echo "selected";} ?>>Rent</option>
                <option value="Sell" <?php if($row[2]=="Sell"){echo "selected";} ?>>Sell</option>
                <option value="Prelease Property" <?php if($row[2]=="Prelease Property"){echo "selected";} ?>>Prelease Property</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_condition" class="form-label">Property Condition</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_condition">
                <option value="naket" <?php if($row[3]=="naket"){echo "selected";} ?>>naket</option>
                <option value="unfurnished" <?php if($row[3]=="unfurnished"){echo "selected";} ?>>unfurnished</option>
                <option value="semifurnished" <?php if($row[3]=="semifurnished"){echo "selected";} ?>>semifurnished</option>
                <option value="only-kitchen-furnished" <?php if($row[3]=="only-kitchen-furnished"){echo "selected";} ?>>only-kitchen-furnished</option>
                <option value="furnished" <?php if($row[3]=="furnished"){echo "selected";} ?>>furnished</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_avail" class="form-label">Property Availability</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_avail">
                <option value="1 BHK" <?php if($row[4]=="1 BHK"){echo "selected";} ?>>1 BHK</option>
                <option value="1.5 BHK" <?php if($row[4]=="1.5 BHK"){echo "selected";} ?>>1.5 BHK</option>
                <option value="2 BHK" <?php if($row[4]=="2 BHK"){echo "selected";} ?>>2 BHK</option>
                <option value="2.5 BHK" <?php if($row[4]=="2.5 BHK"){echo "selected";} ?>>2.5 BHK</option>
                <option value="3 BHK" <?php if($row[4]=="3 BHK"){echo "selected";} ?>>3 BHK</option>
                <option value="3.5 BHK" <?php if($row[4]=="3.5 BHK"){echo "selected";} ?>>3.5 BHK</option>
                <option value="4 BHK" <?php if($row[4]=="4 BHK"){echo "selected";} ?>>4 BHK</option>
                <option value="4.5 BHK" <?php if($row[4]=="4.5 BHK"){echo "selected";} ?>>4.5 BHK</option>
                <option value="5 BHK" <?php if($row[4]=="5 BHK"){echo "selected";} ?>>5 BHK</option>
                <option value="6 BHK" <?php if($row[4]=="6 BHK"){echo "selected";} ?>>6 BHK</option>
                <option value="Above 6 BHK" <?php if($row[4]=="Above 6 BHK"){echo "selected";} ?>>Above 6 BHK</option>
                <option value="PG" <?php if($row[4]=="PG"){echo "selected";} ?>>PG</option>
                <option value="Residential Plot" <?php if($row[4]=="Residential Plot"){echo "selected";} ?>>Residential Plot</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_avail_type" class="form-label">Property Availability Type</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_avail_type">
                <option value="Low Rise Apartment" <?php if($row[5]=="Low Rise Apartment"){echo "selected";} ?>>Low Rise Apartment</option>
                <option value="High Rise Apartment" <?php if($row[5]=="High Rise Apartment"){echo "selected";} ?>>High Rise Apartment</option>
                <option value="Bunglow" <?php if($row[5]=="Bunglow"){echo "selected";} ?>>Bunglow</option>
                <option value="Studio Apartment" <?php if($row[5]=="Studio Apartment"){echo "selected";} ?>>Studio Apartment</option>
                <option value="Multistory Apartment" <?php if($row[5]=="Multistory Apartment"){echo "selected";} ?>>Multistory Apartment</option>
                <option value="Independent Builder Floor" <?php if($row[5]=="Independent Builder Floor"){echo "selected";} ?>>Independent Builder Floor</option>
                <option value="Weekend Home" <?php if($row[5]=="Weekend Home"){echo "selected";} ?>>Weekend Home</option>
                <option value="Penthouse" <?php if($row[5]=="Penthouse"){echo "selected";} ?>>Penthouse</option>
                <option value="Tenement" <?php if($row[5]=="Tenement"){echo "selected";} ?>>Tenement</option>
                <option value="RowHouse" <?php if($row[5]=="RowHouse"){echo "selected";} ?>>RowHouse</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_loc" class="form-label">Property Location</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_loc">
                <option value="makarba" <?php if($row[6]=="makarba"){echo "selected";} ?>>makarba</option>
                <option value="vejalpur" <?php if($row[6]=="vejalpur"){echo "selected";} ?>>vejalpur</option>
                <option value="jivrajpark" <?php if($row[6]=="jivrajpark"){echo "selected";} ?>>jivrajpark</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Property</button>
    </form>
    <br>
    </div>
    <?php
        include("includes/footer.php");
    ?>
    <script src="assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>