<?php
session_start();
include "dbconnect.php";


	if(isset($_POST['login_user']))
    {
      
        $usrnm=$_POST['usrnm'];
        $pswd=$_POST['pswd'];

        $s1="select * from user where u_name='$usrnm' and u_password='$pswd'";
        $r1=mysqli_query($conn,$s1);
        $user_id = "";
        $user_flag = 0;
        while($user_tbl_row = mysqli_fetch_array($r1))
        {
        	$user_flag = 1;
        	$user_id = $user_tbl_row["user_id"];
        }
        if($user_flag == 1)
        {
        	$_SESSION["user_id"] = $user_id;
        	header('location:dash.php');
        }
        else
        {
        	 echo '<script type="text/javascript">alert("User does not exist");</script>';
        	echo '<script>window.location="log.php";</script>';
        }
        
    }

    if(isset($_POST['login_driver']))
    {
    	
       
        $usrnm=$_POST['usrnm'];
        $pswd=$_POST['pswd'];

        $s1="select * from driver where d_name='$usrnm' and u_password='$pswd'";
        $r1=mysqli_query($conn,$s1);
        $d_id = "";
        $driver_flag = 0;
        while($driver_tbl_row = mysqli_fetch_array($r1))
        {
        	$driver_flag = 1;
        	$d_id = $driver_tbl_row["d_id"];
        }
        if($driver_flag == 1)
        {
        	$_SESSION["d_id"] = $d_id;
        	header('location:ddash.php');
        }
        else
        {
        	 echo '<script type="text/javascript">alert("Driver does not exist");</script>';
        	 echo '<script>window.location="log.php";</script>';
        }
        
    }

?>