<?php
session_start();
include "dbconnect.php";
$user_id = "";
if(!isset($_SESSION['user_id']))
{
    header("Location:log.php");
}
else
{
	$user_id = $_SESSION["user_id"];
}
if(isset($_POST['b1']))
{
	
	$dest=$_POST['t1'];
	$pkupt=$_POST['t2'];
	$distance=$_POST['t3'];
	$fare=100+(20*($distance));
	$s1="INSERT INTO `booking`(`user_id`, `destination`, `pkupt`, `distance`, `fare`, `assigned`, `driver`) VALUES ('$user_id','$dest','$pkupt',$distance,$fare,'0','0')";
	$r1=mysqli_query($conn,$s1);
	if($r1 == TRUE)
	{
		echo '<script type="text/javascript">alert("Booking successfull !!!");</script>';
		$_SESSION['payment']=$fare; 
		header('location:pay.php') ;  
	}
	else{
		echo '<script type="text/javascript">alert("Error in booking");</script>';    
		header('location:dash.php') ;  
	}

	$conn->close();
}
?>