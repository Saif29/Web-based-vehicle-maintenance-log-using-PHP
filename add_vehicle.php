<!DOCTYPE html>
<html>
<head>
    <title>Add Vehicle</title>
    <link rel="icon" type="image/png" href="img/gear00.PNG">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="mobile_menu.js"></script>
    <script src="data_formValidation.js"></script>
</head>

<body>

    <?php include("header.php");
    if(!isset($_SESSION['id'])){
        echo "<script> window.location.assign('VML_loginpage.php'); </script>";
    }?>
    <div class="page_top">
        <div class="top_img_div">
            <img class="top_img" src="img/vehicle.png">
        </div>
        <div class="top_text">
            <h1>ADD VEHICLE</h1>
        </div>
    </div>

    <div class="fillup_main">
        <div class="data_forms">
            <form action="insert_vehicle.php" name="add_form" method="POST" onsubmit="return(add_validation());">
                <div class="data_forms_sub">    
                    <div class="data_forms_sub1">
                        <lable>Make</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="make" type="text" placeholder="e.g Honda">    
                    </div>
                </div>
                <div class="data_forms_sub">
                    <div class="data_forms_sub1">
                        <lable>Model</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="model" type="text" placeholder="e.g Civic">
                    </div>
                </div>
                <div class="data_forms_sub">
                    <div class="data_forms_sub1">
                        <lable>Year</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="year" type="text">    
                    </div>
                </div>

                <div class="data_forms_sub">
                    <button type="submit" class="data_form_button">Save</button>
                </div>
            </form>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>