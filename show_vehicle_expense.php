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
    $sql = "SELECT * FROM expense WHERE e_vehicleID = '$vid'";
    $result = mysqli_query($connection,$sql);?>
    <div class="fillup_main">
    <table><th>Date</th><th>Odometer</th><th>Type</th><th>Cost</th>
    <?php

    while($res = mysqli_fetch_array($result)){
        $Edate = $res['e_date'];
        $Eodometer = $res['e_odometer'];
        $Etype = $res['e_type'];
        $Ecost = $res['e_cost'];
        echo "<tr><td> $Edate </td><td> $Eodometer </td><td> $Etype </td><td> $Ecost </td></tr>";
    }
        echo "</table></div>";
    ?>
    
    <?php include("footer.php"); ?>
    </body>
</html>