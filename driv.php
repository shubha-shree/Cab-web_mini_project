
<?php
//this code updates the booking table after a driver is assigned but is still in the admin page
session_start();
include "dbconnect.php";
$user=$_POST['user'];
$driver=$_POST['driver'];
//connecting to the database


$s1="UPDATE `booking` SET `assigned`= 1,`driver`='$driver',`driver`='$driver' WHERE user_id='$user'";
$r1=mysqli_query($conn,$s1);
$user_tbl = "UPDATE user SET d_id='$driver' WHERE user_id = '$user'";
$conn->query($user_tbl);
$conn->close();
header('location:admindash.php');
?>
