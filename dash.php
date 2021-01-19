<?php
session_start();
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
#t1,#t2,#t3{
    border-radius:5%;
    margin-top:30px;
    margin-bottom:20px;
    padding:10px;
    padding-left:70px;
	padding-right:70px;
	border:1px solid black;
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
									<li class="first-list"><a class="active" href="dash.php">Home</a></li>
									<li><a href="cab.php">Cab</a></li>
									<li><a href="settings.php">Settings</a></li>
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
    <!--map-->

	<!--//map-->
	<!--button-->
	<div class="wrapper col-md-4">
		<div class="container-fluid">
			<form action="cab_book_process.php" method="post">
				<center><input id="t1" name="t1" type="text" class="form-group" placeholder="Enter Your Destination"></center><br>
				<center><input id="t2" name="t2" type="text" class="form-group" placeholder="Pick up time"></center><br>
				<center><input id="t3" name="t3" type="text" class="form-group" placeholder="Distance in KM"></center><br>
				<center><button id="b1" name="b1" type="submit" class="btn btn-success">Book a Cab</button></center>
			</form>
		</div>
	</div>

	<!--//button-->
    <!--journey-->
    
	<!--//journey-->


</body>
</html>
