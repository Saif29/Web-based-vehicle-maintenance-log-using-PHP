<?php
include 'connection.php';

$date = $_POST['date'];
$odometer = $_POST['odometer'];
$service = $_POST['service'];
$center = $_POST['center'];
$cost = $_POST['cost'];
$vehicleID = $_POST['v_ID'];

//Insert Query of SQL
$query = mysqli_query($connection, "insert into service(s_date, s_odometer, s_type, s_center, s_cost, s_vehicleID) values('$date', '$odometer', '$service', '$center', '$cost', '$vehicleID')");
echo "<script>alert('Data Saved Successfully!'); window.location.assign('service.php'); </script>";
mysqli_close($connection); // Closing Connection with Server

//= = = =================================================================CHANGING KARNI HAIN=============================

?>