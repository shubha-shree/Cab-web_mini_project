<?php
session_start();
include "dbconnect.php";
	if(!isset($_SESSION['login']))
	{
		header("Location:adminlog.php");
	} 
	
	$s1="SELECT u.u_name,b.book_id,u.user_id FROM booking b, user u WHERE b.assigned=0 and b.driver=0 and u.d_id=b.driver and b.user_id = u.user_id";
	$r1=mysqli_query($conn,$s1);
	$s2="SELECT * FROM `driver` WHERE driver_status='0'";
	$r2=mysqli_query($conn,$s2);


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
.wrapper{
    margin-right:50%;
    margin-left:30%;
    padding-top:40px;
}
#b1{
    border-radius:5%;
    padding:10px;
    padding-left:70px;
    padding-right:70px;
    margin-top:30px;
}
#t1{
    border-radius:5%;
    margin-top:70px;
    margin-bottom:20px;
    padding:10px;
    padding-left:70px;
	padding-right:70px;
	border:1px solid black;
}


.box{
	text-align:center;
	border:1px solid black;
	width:300px;
	margin-top:30px;
	height:250px;
	background-color:black;
	box-shadow:0px 0px 5px #000;
}
.drpdwn{
	text-align:center;
	display:block;
	width :250px;
	padding:10px;
	margin-top:20px;
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
									<li class="first-list"><a class="active" href="admindash.php">Home</a></li>
									<li><a href="revenue.php">Revenue</a></li>
									<li><a href="report.php">Report</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner -->
	<div class="w3layouts" style="margin-bottom: 40px;">
        <div class="mid-class">
            <div class="container box">
                <form action="driv.php" method="post">
                    <select class="drpdwn" name="user">
						<option value="" disabled selected>select the booking</option>
						<?php while($row = mysqli_fetch_array($r1)):;?>
						<option value="<?php echo $row[2];?>"><?php echo $row[0];?></option>
						<?php endwhile;?>
					</select><br>
					<select class="drpdwn" name="driver">
						<option value="" disabled selected>select the driver</option>
						<?php while($row = mysqli_fetch_array($r2)):;?>
						<option value="<?php echo $row["d_id"];?>"><?php echo $row["d_name"];?></option>
						<?php endwhile;?>
					</select><br>
					<button type="submit" class="btn btn-success btn-block">Assign</button><br>
				</form>
			</div>
		</div>
	</div>

</body>
</html>