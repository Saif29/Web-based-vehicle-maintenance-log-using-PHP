<?php
session_start();
include 'connection.php';
if($_SESSION['id'] != 24){
echo "<script> window.location.assign('VML_loginpage.php'); </script>";
}
$userID = $_GET['IDofUser'];
$que = "SELECT v_id FROM vehicle WHERE v_personID = '$userID'";
$result2 = mysqli_query($connection, $que);
while($ve = mysqli_fetch_array($result2)){
    $vID = $ve['v_id'];
    $sql1 = "DELETE FROM fillup WHERE f_vehicleID='$vID'";
    $dele1 = mysqli_query($connection, $sql1);
    $sql2 = "DELETE FROM expense WHERE e_vehicleID='$vID'";
    $dele2 = mysqli_query($connection, $sql2);
    $sql3 = "DELETE FROM service WHERE s_vehicleID='$vID'";
    $dele3 = mysqli_query($connection, $sql3);
    $sql4 = "DELETE FROM vehicle WHERE v_id='$vID'";
    $dele4 = mysqli_query($connection, $sql4);
}
echo "<script>alert('User deleted successfully');</script>";
$sql5 = "DELETE FROM user WHERE p_id='$userID'";
$dele5 = mysqli_query($connection, $sql5);

echo "<script>window.location.assign('AdminView.php'); </script>";

?>