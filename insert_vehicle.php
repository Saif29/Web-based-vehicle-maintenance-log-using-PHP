<?php
session_start();
include 'connection.php';

$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$personID = $_SESSION['id'];
//Insert Query of SQL
$query = mysqli_query($connection, "insert into vehicle(v_make, v_model, v_year, v_personID) values('$make', '$model', '$year', '$personID')");
echo "<script>alert('Data Saved Successfully!'); window.location.assign('add_vehicle.php'); </script>";
mysqli_close($connection); // Closing Connection with Server
?>