<?php
session_start();
include "dbconnect.php";


#-----------------------------------Register As User --------------------------------------------------
if(isset($_POST['regis']))
{
	
	$usrnm=$_POST['usrnm'];

	$pwd=$_POST['pswd'];
	$cpwd=$_POST['cpswd'];

		
	//checking if password and confirm password matches
	if($pwd==$cpwd)
	{
		//storing the values in the database for the new user
		$eid=$_POST['eid'];
		$ctno=$_POST['ctno'];
		   
		//store the values in user table
		$user_flag = 0;
		$select_user_tbl_query = "SELECT * from user WHERE u_name='$usrnm'";
		$select_user_tbl_result = $conn->query($select_user_tbl_query);
		while($select_user_tbl_row = mysqli_fetch_array($select_user_tbl_result))
		{
			$user_flag = 1;
		}
		if($user_flag == 0)
		{
			$sql="INSERT INTO `user`(`u_name`, `u_password`, `u_email`, `u_contno`, `d_id`) VALUES ('$usrnm','$pwd','$eid',$ctno,'0')";
			$conn->query($sql);
			echo '<script type="text/javascript">alert("User Registration Successfully Submitted..")</script>';
			echo '<script>window.location="log.php";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Username already exists. Try with a different username.")</script>';
			echo '<script>window.location="register.php";</script>';
		}
	

	}
	else
	{
		echo '<script type="text/javascript">alert("password and confirm password do not match")</script>';
		echo '<script>window.location="register.php";</script>';
	}

}

#-------------------------------------Register As Driver---------------------------------------
if(isset($_POST['regis-dr']))
	{
		
		$usrnm=$_POST['usrnm'];

		$pwd=$_POST['pswd'];
		$cpwd=$_POST['cpswd'];
			
		//checking if password and confirm password matches
		if($pwd==$cpwd)
		{
			//storing the values in the database for the new user
			$eid=$_POST['eid'];
			$ctno=$_POST['ctno'];

			$driver_flag = 0;
			$select_driver_tbl_query = "SELECT * from driver WHERE d_name='$usrnm'";
			$select_driver_tbl_result = $conn->query($select_driver_tbl_query);
			while($select_driver_tbl_row = mysqli_fetch_array($select_driver_tbl_result))
			{
				$driver_flag = 1;
			}
			if($driver_flag == 0)
			{
				//store the values in user table
				$sql="INSERT INTO `driver`(`d_name`,`u_password`, `u_email`, `u_contno`,`driver_status`) VALUES ('$usrnm','$pwd','$eid','$ctno','0')";
				$conn->query($sql);
				echo '<script type="text/javascript">alert("Driver Registration Successfully Submitted..")</script>';
				echo '<script>window.location="log.php";</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert("Username already exists. Try with a different username.")</script>';
				echo '<script>window.location="register.php";</script>';
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("password and confirm password do not match")</script>';
			echo '<script>window.location="register.php";</script>';
		}
		
	}


?>