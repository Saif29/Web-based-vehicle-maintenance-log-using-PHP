<?php include("connection.php"); ?>
<html>
    <head>
        <title>Show Vehicles</title>
        <link rel="icon" type="image/png" href="img/gear00.PNG">
        <link rel="stylesheet" media="screen and (min-width: 768px)" href="style.css">
        <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src="mobile_menu.js"></script>
        <style>
            @media screen and (min-width: 768px) {
                .v_table{
                    width: 100%;
                    border: 1px solid black;
                    font-size: x-large;
                    background-color: white;
                }
                th {
                    background-color: black;
                    color: white;
                    height: 10vh;
                }
                td {
                    border: 1px solid black;
                    height: 10vh;
                    padding: 1%;
                    text-align: center;
                }
            }
            @media screen and (max-width: 768px) {
                .v_table{
                    width: 100%;
                    border: 1px solid black;
                    background-color: white;
                }
                th {
                    background-color: black;
                    color: white;
                    height: 10vh;
                }
                td {
                    border: 1px solid black;
                    height: 10vh;
                    padding: 1%;
                    text-align: center;
                }
            }
        </style>
    </head>
    <body>
    <?php include("header.php");
    if(!isset($_SESSION['id'])){
        echo "<script> window.location.assign('VML_loginpage.php'); </script>";
    }
    $pid = $_SESSION['id'];
    $sql = "SELECT * FROM vehicle WHERE v_personID = '$pid'";
    $result = mysqli_query($connection,$sql);?>
    <div class="fillup_main">
    <table class="v_table"><th width="40%">Vehicles</th><th>Fillup</th><th>Service</th><th>Expense</th>
    <?php
    while($res = mysqli_fetch_array($result)){
        $Vmake = $res['v_make'];
        $Vmodel = $res['v_model'];
        $Vyear = $res['v_year'];
        $Vid = $res['v_id'];
        echo "<tr><td width='40%'> $Vmake ";echo "$Vmodel "; echo "$Vyear </td>"?><td><a href="show_vehicle_fillup.php?IDofVehicle=<?php echo $Vid?>">View Fillup Details</a></td><td><a href="show_vehicle_service.php?IDofVehicle=<?php echo $Vid?>">View Service Details</a></td><td><a href="show_vehicle_expense.php?IDofVehicle=<?php echo $Vid?>">View Expence Details</a></td></tr>
<?php
    }
    echo "</table></div>"
    ?>
    
    <?php include("footer.php"); ?>
    </body>
</html>