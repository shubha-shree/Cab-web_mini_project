<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Allied Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome2.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style2.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <style>
    .w3layouts{
        width: 1000px;
        padding-left: 425px;
    }
    </style>
</head>

<body>
    <h1 class="error">Login Form</h1>
    <div class="w3layouts" style="margin-bottom: 40px;">
        <div class="mid-class">
            <div class="txt-left-side" style="background-color:black;">
                <h2 style="color:white;"> Admin Login  </h2>
                <form action="" method="post">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="text" name="usrnm" placeholder="Username" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="pswd" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="main-two-w3ls">
                        <div class="right-side-forget">
                            <a href="set3.php" class="for">Forgot password...?</a>
                        </div>
                    </div>
                    <div class="btnn">
                        <button name="login" type="submit" style="background-color:green;" >Login </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    if(isset($_POST['login']))
    {
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cab";
        //create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("Error message: ".$conn->connect_error);
        }

        $usrnm=$_POST['usrnm'];
        $pswd=$_POST['pswd'];

        $s1="select * from admin where a_name='$usrnm' and a_password='$pswd'";
        $r1=mysqli_query($conn,$s1);
        if(mysqli_num_rows($r1)>0)
        {
            $row=mysqli_fetch_array($r1);
            $_SESSION["usrnm"]=$usrnm;
            $_SESSION["pswd"]=$pswd;
            $_SESSION["ctno"]=$row['u_contno'];

            if(isset($_SESSION["usrnm"]))
            {
                $_SESSION['login']=1;

                header('location:admindash.php');
            }
            else{
                echo '<script type="text/javascript">alert("session variable not set");</script>';    
            }
        }
        else
        {
            //Username does'nt exist
            echo '<script type="text/javascript">alert("Access allowed only for Admins.");</script>';
        }
    }
    

?>
    
</body>

</html>