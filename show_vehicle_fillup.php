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
                table{
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
                table{
                    width: 100%;
                    border: 1px solid black;
                    font-size: smaller;
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
    $vid = $_GET['IDofVehicle'];
    $sql = "SELECT * FROM fillup WHERE f_vehicleID = '$vid'";
    $result = mysqli_query($connection,$sql);?>
    <div class="fillup_main">
    <table><th>Date</th><th>Odometer</th><th>Quantity</th><th>Price</th><th>Cost</th><th>Station</th>
    <?php

    while($res = mysqli_fetch_array($result)){
        $Fdate = $res['f_date'];
        $Fodometer = $res['f_odometer'];
        $Fquantity = $res['f_quantity'];
        $Fprice = $res['f_price'];
        $Fcost = $res['f_cost'];
        $Fstation = $res['f_station'];
        echo "<tr><td> $Fdate </td><td> $Fodometer </td><td> $Fquantity </td><td> $Fprice </td><td> $Fcost </td><td> $Fstation </td></tr>";
    }
        echo "</table></div>";
    ?>
    
    <?php include("footer.php"); ?>
    </body>
</html>