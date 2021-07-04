<?php
include 'connection.php';
session_start();

$email = $_GET['EMail'];

$sql = "SELECT * FROM user WHERE p_email = '$email'";

$result = mysqli_query($connection,$sql);

$rows = mysqli_num_rows($result);
if($rows == 1) {
    $res = mysqli_fetch_array($result);
    $_SESSION['id'] = $res['p_id'];
    $_SESSION['username'] = $res['username'];
    echo "<script> window.location.assign('index.php'); </script>";    
}
else {
    echo "<script>alert('Failed to login!');  window.location.assign('VML_loginpage.php'); </script>";    
}
?>