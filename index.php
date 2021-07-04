<!DOCTYPE html>
<html>
<head>
    <title>VML-home</title>
    <link rel="icon" type="image/png" href="img/gear00.PNG">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="mobile_menu.js"></script>
</head>

<body>

    <?php include("header.php"); ?>
    <div class="row homebody">
        <div class="col-4 col-t-6 col-m-12 home_content">
            <div class="content1">
                <p><b>My Vehicles</b></p>
            </div>
            <div class="content2">
                <p>Shows the stats of all your vehicles.</p>
            </div>
            
            <a class="content_links" href="show_vehicles.php">
            <div class="content3">
                Show
            </div>
            </a>
        </div>
        <div class="col-4 col-t-6 col-m-12 home_content">
            <div class="content1">
                <p><b>Add Fill-Up</b></p>
            </div>
            <div class="content2">
                <p>Add the details of fuel refill.</p>
            </div>
            <a class="content_links" href="fillup.php">
                <div class="content3">
                    Add
                </div>
            </a>
        </div>
        <div class="col-4 col-t-6 col-m-12 home_content">
            <div class="content1">
                <p><b>Add Service</b></p>
            </div>
            <div class="content2">
                <p>Add the details of any service done on vehicle.</p>
            </div>
            <a class="content_links" href="service.php">
                <div class="content3">
                    Add
                </div>
            </a>
        </div>
        <div class="col-4 col-t-6 col-m-12 home_content">
            <div class="content1">
                <p><b>Add Expenses</b></p>
            </div>
            <div class="content2">
                <p>Add any other expense done on vehicle.</p>
            </div>
            <a class="content_links" href="expense.php">
                <div class="content3">
                    Add
                </div>
            </a>
        </div>
        <div class="col-4 col-t-6 col-m-12 home_content">
            <div class="content1">
                <p><b>Add new vehicle</b></p>
            </div>
            <div class="content2">
                <p>Add a new vehicle.</p>
            </div>
            <a class="content_links" href="add_vehicle.php">
                <div class="content3">
                    Add
                </div>
            </a>
        </div>
        <div class="col-4 col-t-6 col-m-12 home_content">
            <div class="content1">
                <p><b>Sell Vehicle</b></p>
            </div>
            <div class="content2">
                <p>Send the record of your vehicle to the new owner.</p>
            </div>
            <a class="content_links" href="sell_vehicle.php">
                <div class="content3">
                    Sell
                </div>
            </a>
        </div>

    </div>
    <?php include("footer.php"); ?>
    
</body>
</html>