<?php

session_start();
include_once("connection.php");

$username = $_POST['username'];
$psw = $_POST['psw'];
$psw = md5($psw);

$sql = "SELECT * FROM user WHERE (username= '$username' && pass= '$psw' && p_id= '24')";

$result = mysqli_query($connection,$sql);

$rows = mysqli_num_rows($result);
if($rows == 1) {
    $res = mysqli_fetch_array($result);
    $_SESSION['id'] = $res['p_id'];
    $_SESSION['username'] = $res['username'];
    echo "<script> window.location.assign('AdminView.php'); </script>";    
}
else {
    echo "<script>alert('Incorrect username or password!');  window.location.assign('AdminLoginPage.html'); </script>";    
}

?>