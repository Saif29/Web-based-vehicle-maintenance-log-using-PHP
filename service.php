<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Service</title>
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
        <div class="top_img_div"><img class="top_img" src="img/service.jpg"></div>
        <div class="top_text"><h1>ADD SERVICE</h1></div>
    </div>

    <div class="fillup_main">
        <div class="data_forms">
            <form action="insert_service.php" name="service_form" method="POST" onsubmit="return(service_validation());">
                <div class="data_forms_sub">    
                    <div class="data_forms_sub1">
                        <lable>Vehicle</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <select name="v_ID" class = "data_forms_input">
                            <option selected="selected">Select Vehicle</option>
                            <?php
                                $pid = $_SESSION['id'];
                                $sql = "SELECT * FROM vehicle WHERE v_personID = '$pid'";
                                $result = mysqli_query($connection,$sql);
                                while($res = mysqli_fetch_array($result)){
                                    $Vmake = $res['v_make'];
                                    $Vmodel = $res['v_model'];
                                    $Vyear = $res['v_year'];
                                    $Vid = $res['v_id'];
                                    echo "<option value = '$Vid'>";echo"$Vmake ";echo "$Vmodel ";echo "$Vyear ";echo"</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="data_forms_sub">    
                    <div class="data_forms_sub1">
                        <lable>Date</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="date" type="text" placeholder="DD-MM-YYYY">    
                    </div>
                </div>
                <div class="data_forms_sub">
                    <div class="data_forms_sub1">
                        <lable>Odometer</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="odometer" type="text" placeholder="Kilometers">    
                    </div>
                </div>
                <div class="data_forms_sub">
                    <div class="data_forms_sub1">
                        <lable>Service</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="service" type="text" placeholder="e.g. Battery, Engine Oil">    
                    </div>
                </div>
                <div class="data_forms_sub">
                    <div class="data_forms_sub1">
                        <lable>Service Center</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="center" type="text">    
                    </div>
                </div>
                <div class="data_forms_sub">
                    <div class="data_forms_sub1">
                        <lable>Total Cost</lable>
                    </div>
                    <div class="data_forms_sub2">
                        <input class="data_forms_input" name="cost" type="text" placeholder="Rs.">    
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