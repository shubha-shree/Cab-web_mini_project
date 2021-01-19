
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


	tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
tr {
  border: 1px solid black;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
  
}
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}
th{
    padding : 10px;
    width:200px;
    color: white;
    background-color:black;
}
table{
    box-shadow:0px 0px 5px #000;
}

.box{
    
    width:300px;
    height:130px;
    margin-top:70px;
    text-align:center;
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
									<li class="first-list"><a href="admindash.php">Home</a></li>
									<li><a href="revenue.php">Revenue</a></li>
									<li><a class="active" href="report.php">Report</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>

			<div class="clearfix"> </div>
		</div>
    </div>
    <div class="container box">    
<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location:adminlog.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("Error message: ".$conn->connect_error);
}

	$s1="SELECT distinct `driver`,COUNT(`driver`) FROM `booking` where `assigned` =1 group by driver";
	$r1=mysqli_query($conn,$s1);
	if(mysqli_num_rows($r1)>0)
	{
        echo '<table border="1"><tr><th>'.'Driver Name'.'</th><th>'.'No. Of Booking'.'</th></tr>';
        while($row = mysqli_fetch_array($r1))
        {
            echo '<tr><td>'.$row[0].'</td>'.'<td>'.$row[1].'</td>';
        }
        echo '</table>';
	}
	else
	{
		echo '<h2>Total Fare</h2><hr>';
		echo 'No Booking yet';
	}
	$conn->close();

?>
</div>
</body>
</html>