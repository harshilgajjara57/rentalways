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
    <title>RentalWays - Add Properties</title>
</head>
<body>
    <?php
        include("includes/navibar.php");
    ?>
    <div class="container">
    <br><h1 class="display-6">Add Properties</h1><br>
    <form method="post" action="dbprocessor/addproperty.php">
        <input type="hidden" name="addproperty" value="addproperty">
        <div class="mb-3">
            <label for="prop_type" class="form-label">Property Type</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_type">
                <option selected disabled>select</option>
                <option value="residential">Residential</option>
                <option value="commercial">commercial</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_deal" class="form-label">Property Deal</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_deal">
                <option selected disabled>select</option>
                <option value="Rent">Rent</option>
                <option value="Sell">Sell</option>
                <option value="Prelease Property">Prelease Property</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_condition" class="form-label">Property Condition</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_condition">
                <option selected disabled>select</option>
                <option value="naket">naket</option>
                <option value="unfurnished">unfurnished</option>
                <option value="semifurnished">semifurnished</option>
                <option value="only-kitchen-furnished">only-kitchen-furnished</option>
                <option value="furnished">furnished</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_avail" class="form-label">Property Availability</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_avail">
                <option selected disabled>select</option>
                <option value="1 BHK">1 BHK</option>
                <option value="1.5 BHK">1.5 BHK</option>
                <option value="2 BHK">2 BHK</option>
                <option value="2.5 BHK">2.5 BHK</option>
                <option value="3 BHK">3 BHK</option>
                <option value="3.5 BHK">3.5 BHK</option>
                <option value="4 BHK">4 BHK</option>
                <option value="4.5 BHK">4.5 BHK</option>
                <option value="5 BHK">5 BHK</option>
                <option value="6 BHK">6 BHK</option>
                <option value="Above 6 BHK">Above 6 BHK</option>
                <option value="PG">PG</option>
                <option value="Residential Plot">Residential Plot</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_avail_type" class="form-label">Property Availability Type</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_avail_type">
                <option selected disabled>select</option>
                <option value="Low Rise Apartment">Low Rise Apartment</option>
                <option value="High Rise Apartment">High Rise Apartment</option>
                <option value="Bunglow">Bunglow</option>
                <option value="Studio Apartment">Studio Apartment</option>
                <option value="Multistory Apartment">Multistory Apartment</option>
                <option value="Independent Builder Floor">Independent Builder Floor</option>
                <option value="Weekend Home">Weekend Home</option>
                <option value="Penthouse">Penthouse</option>
                <option value="Tenement">Tenement</option>
                <option value="RowHouse">RowHouse</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prop_loc" class="form-label">Property Location</label>
            <select class="form-select" aria-label="Default select example" id="prop_type" name="prop_loc">
                <option selected disabled>select</option>
                <option value="makarba">makarba</option>
                <option value="vejalpur">vejalpur</option>
                <option value="jivrajpark">jivrajpark</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
    <br>
    </div>
    <?php
        include("includes/footer.php");
    ?>
    <script src="assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("properties").className += " active";
        document.getElementById("addproperties").className += " active";
    </script>
</body>
</html>