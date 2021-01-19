
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
                <h2 style="color:white;"> Login Here </h2>
                <form action="login_process.php" method="post">
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
                        <button name="login_user" type="submit" style="background-color:green;" >Login As User</button>
                    </div>
                    <div class="btnn">
                        <button name="login_driver" type="submit" style="background-color:green;" >Login  As Driver</button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="register.php">Register Here
                        </a>
                    </h3>
                </div>

            </div>
        </div>
    </div>

    
</body>

</html>