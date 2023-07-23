<?php
session_start();
include 'include/connection.php';
$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$userid = isset($_SESSION['useid']) ? $_SESSION['userid'] : "";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $get_rc = mysqli_query($conn, "select * from login where username='$email' and password='$password'");
    $num_rows = mysqli_num_rows($get_rc);
    if ($num_rows > 0) {
        $row = mysqli_fetch_array($get_rc);
        $_SESSION["userid"] = $row["username"];
        $_SESSION["urole"] = $row["role"];
        if ($row["role"] == "admin") {
            $_SESSION["userid"] = $row["username"];
            $_SESSION["urole"] = $row["role"];
            header("location:admin-dashboard.php");
        } else {
            $_SESSION["userid"] = $row["username"];
            $_SESSION["urole"] = $row["role"];
            header("location:home.php");
        }
    } else {
        echo "<script>alert('Incorrect username or password, please check and try again.');</script>";
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $proname; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <!--js-->
        <script src="js/jquery-2.1.1.min.js"></script> 
        <!--icons-css-->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <!--static chart-->
    </head>
    <body>	
        <div class="login-page">
            <div class="login-main">  	
                <div class="login-head">
                    <h1><?php echo $proname; ?></h1>
                </div>
                <div class="login-block">
                    <form method="post" action="">
                        <input type="text" name="email" placeholder="Email" required="">
                        <input type="password" name="password" class="lock" placeholder="Password">
                        <div class="forgot-top-grids">
                            <div class="forgot-grid">
                                <ul>
                                    <li>
                                        <input type="checkbox" id="brand1" value="">
                                        <label for="brand1"><span></span>Remember me</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="forgot">
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" name="login" value="Login">	
                        <h3>Not a member?<a href="signup"> Sign up now</a></h3>				
                    </form>
                </div>
            </div>
        </div>
        <!--inner block end here-->
        <!--copy rights start here-->
        <div class="copyrights">
            <p>© 2023 eTranscript. All Rights Reserved | Developed by  <a href="http://csproject.com.ng/" target="_blank">CS Project</a> </p>
        </div>	
        <!--COPY rights end here-->

        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
        <script src="js/bootstrap.js"></script>
        <!-- mother grid end here-->
    </body>
</html>




