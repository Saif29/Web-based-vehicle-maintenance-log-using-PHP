<?php
include 'connection.php';

$date = $_POST['date'];
$odometer = $_POST['odometer'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$cost = $_POST['cost'];
$station = $_POST['station'];
$vehicleID = $_POST['v_ID'];

//Insert Query of SQL
$query = mysqli_query($connection, "insert into fillup(f_date, f_odometer, f_quantity, f_price, f_cost, f_station, f_vehicleID) values('$date', '$odometer', '$quantity', '$price', '$cost', '$station', '$vehicleID')");
echo "<script>alert('Data Saved Successfully!'); window.location.assign('fillup.php'); </script>";
mysqli_close($connection); // Closing Connection with Server
?>