<?php
    session_start();
    include "dbconnect.php";
    if(!isset($_SESSION['user_id']))
{
    header("Location:log.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- gallery -->
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<!-- //gallery -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<style>
.setlink{
    margin-top:20px;  
}
.wrapper{
    margin-right:50%;
    margin-left:40%;
    padding-top:40px;
}

#b2,#b3,#b4{
    border-radius:5%;
    padding:10px;
    padding-left:70px;
    padding-right:70px;
    margin-top:30px;
}
</style>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		
		<div class="w3-header-bottom">
			<div class="w3layouts-logo">
				<h1 style="color:white;" >Go Cab</h1>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a href="dash.php">Home</a></li>
									<li><a href="cab.php">Cab</a></li>
									<li><a class="active" href="settings.php">Settings</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>

			<div class="clearfix"> </div>
		</div>
		<div class="wrapper col-md-4">
            <h3 style="margin-top:10px;">Change Password</h3><hr>
            <div class="container col-md-8 setlink">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nwpwd">Enter new Password</label>
                        <input type="password" id="nwpwd" name="nwpwd" class="form-control" aria-describedby="rule">
                        <small id="rule" class="text-muted">Atleast 8 characters long</small> 
                    </div>
                    <div class="form-group">
                        <label for="cpwd">Confirm Password</label>
                        <input type="password" id="cpwd" name="cpwd" class="form-control"> 
                    </div>
                    <button type="submit" class="btn btn-success" id="b3" name="b3">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['b3']))
{
    $nwpswd=$_POST['nwpwd'];
    $cnwpswd=$_POST['cpwd'];

    //create connection
    
    //$oldusnm=$_SESSION['usrnm'];
    //$oldusnm=$_SESSION['usrnm'];
   $user_id=$_SESSION['user_id'];
   echo $user_id;
   $ss="select u_name from user where user_id='$user_id'";
   //$ldusnm=$conn->query($ss);


   if($nwpswd == $cnwpswd)
    {
        $s1="update user set u_password='".$nwpswd."' where user_id='".$user_id."' ";
        if($conn->query($s1) == TRUE)
        {
            echo '<script type="text/javascript">alert("password changed successfully !!!");</script>';     
        }
        else
        {
            echo '<script type="text/javascript">alert("Error in changing password.");</script>';     
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("password and confirm password do not match.");</script>';     
    }

    /*$select_user_tbl_query="SELECT * FROM user where u_password='$u_password'";
    $select_user_tbl_result=$conn->query($select_user_tbl_query);
    $user_flag=0;
    while($select_user_tbl_row=mysqli_fetch_array($select_user_tbl_result))
    {
        $user_flag=1;
    }
    //create connection
    if($user_flag==0)
    {
            $s1="update user set u_password='$nwpswd' where user_id='$user_id'";
            $conn->query($s1);
            echo '<script type="text/javascript">alert("password changed successfully !!!");</script>';


    }
    else
    {
        echo '<script type="text/javascript">alert("password already used by other user . Try another password .");</script>';       
    }*/
    $conn->close();
}

?>

</body>
</html>