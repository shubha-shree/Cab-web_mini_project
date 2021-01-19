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

if(isset($_POST['b2']))
{

    $newusnm=$_POST['nwusn'];

    $select_user_tbl_query="SELECT * FROM user where u_name='$newusnm'";
    $select_user_tbl_result=$conn->query($select_user_tbl_query);
    $user_flag=0;
    while($select_user_tbl_row=mysqli_fetch_array($select_user_tbl_result))
    {
    	$user_flag=1;
    }
    //create connection
    if($user_flag==0)
	{
		    $s1="update user set u_name='$newusnm' where user_id='$user_id'";
		    $conn->query($s1);
		    echo '<script type="text/javascript">alert("username was changed successfully !!!");</script>';


	}
 
    else
    {
    	echo '<script type="text/javascript">alert("username already exists . Try another username .");</script>';       
    }
    
$conn->close();
}
        	echo '<script>window.location="settings.php";</script>';

?>