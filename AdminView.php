<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="img/gear00.PNG">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="mobile_menu.js"></script>
    <title>Admin Portal</title>
    <style>
        @media screen and (min-width: 768px) {
            .A_table{
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
            .admin_main {
                padding-left: 10%;
                padding-right: 10%;
                padding-bottom: 4%;
                padding-top: 2%;
                background-color: rgb(38, 38, 38);
            }
            .header {
                height: 110px;
                background-color: black;
                border-bottom: 2px solid white;
                color: white;
                font-size: 65px;
                padding: 1%;
            }
            .text {
                width:85%;
                float: left;
            }
            .adminLogoutdiv {
                float: left;
                text-align: center;
                margin-top: 23px;
                margin-left: 50px;
                height: 60%;
                background-color: red;
                border-radius: 20px;
                width: 8%;
            }
            .adminLogoutdiv:hover {
                border: 2px solid white;
            }
            .aLink {
                text-decoration: none;
                font-size: x-large;
                color: white;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
<?php
include 'connection.php';
if($_SESSION['id'] != 24){
echo "<script> window.location.assign('VML_loginpage.php'); </script>";
}

$sql = "SELECT p_id, p_name, p_email FROM user";
$result = mysqli_query($connection,$sql);?>

<div class="header">
    <div class="text">
        <p style="margin-left:40%">VML ADMIN PORTAL</p>
    </div>
    <a href = "logout.php">
        <div class="adminLogoutdiv">
            <p class="aLink">Log Out</p>
        </div>
    </a>
</div>
<div class="admin_main">
<table class="A_table"><th width="10%">User's ID</th><th width="30%">Name</th><th width="30%">Email</th><th width="10%">Total Vehicles</th><th width="20%">Delete User</th>
<?php
while($res = mysqli_fetch_array($result)){
$ID = $res['p_id'];
$Name = $res['p_name'];
$Email = $res['p_email'];
$que = "SELECT v_id FROM vehicle WHERE v_personID = '$ID'";
$result2 = mysqli_query($connection, $que);
$NoV=0;
while($aa = mysqli_fetch_array($result2)){
    $NoV++;
}
echo "<tr><td> $ID </td><td> $Name </td><td> $Email </td><td> $NoV </td>"?> <td> <a href="AdminDelete.php?IDofUser=<?php echo $ID;?>"> Delete</a> </td>
<?php
}
echo "</table></div>"
?>
</body>
</html>