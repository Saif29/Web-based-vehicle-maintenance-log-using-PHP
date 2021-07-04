<?php
include 'connection.php';

$date = $_POST['date'];
$odometer = $_POST['odometer'];
$expense = $_POST['expense'];
$cost = $_POST['cost'];
$vehicleID = $_POST['v_ID'];

//Insert Query of SQL
$query = mysqli_query($connection, "insert into expense(e_date, e_odometer, e_type, e_cost, e_vehicleID) values('$date', '$odometer', '$expense', '$cost', '$vehicleID')");
echo "<script>alert('Data Saved Successfully!'); window.location.assign('expense.php'); </script>";
mysqli_close($connection); // Closing Connection with Server

//= = = =================================================================CHANGING KARNI HAIN=============================

?>