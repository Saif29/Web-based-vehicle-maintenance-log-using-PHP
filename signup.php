<?php
include 'connection.php';
session_start();

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw = md5($psw);
//Insert Query of SQL
$query = mysqli_query($connection, "insert into user(p_name, p_email, username, pass) values('$name', '$email', '$username', '$psw')");
echo "<script> window.location.assign('signup_2.php?EMail=$email'); </script>";
?>