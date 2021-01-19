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
<script src="js/index.js"></script>
<script type="text/javascript">

	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

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
									<li><a href=cab.php>Cab</a></li>
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
<!--payment design-->
<center><h2>Make Payment</h2></center>
        <form method="POST">
        <div style="padding:10px;padding-top:50px;">  
        <div class="container" style="background:lightgrey;width:550px;">
    <div class="row" style="padding-left:20px;padding-top:20px;padding-bottom:20px;width:1500px;">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber" style="float:left;">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" onkeyup="validate_card()" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth" style="float:left;padding-top:20px">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro" style="padding-left:50px;">
                                    <input type="text" onkeyup="validate_month()" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro" style="padding-left:50px;">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode" style="padding-top:20px">
                                    CVV CODE</label>
                                <input type="password" onkeyup="validate_cvv()" name="cv" class="form-control" id="cvCode" placeholder="CVV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active" ><span class="badge pull-right" style="width:100px;padding-left:10px;"><span>&#8377;</span><?php $pay=$_SESSION['payment']; echo $pay;?></span> Final Payment</a>
                </li>
            </ul>
            <br/>

            <button class="btn btn-success btn-lg btn-block" type="submit" name="py" role="button">Pay</button>
        </div>
    </div>
</div>


</body>
</html>