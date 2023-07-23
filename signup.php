<?php
session_start();
include 'include/connection.php';
$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$userid = isset($_SESSION['useid']) ? $_SESSION['userid'] : "";

if (isset($_POST["reg"])) {
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $matno = $_POST["matno"];
    $date= "ID".date("yihms");

    $insert_value = mysqli_query($conn, "insert into student values ('','$fullname','$email','$phone','$matno')");
    if ($insert_value) {
        $insert_login = mysqli_query($conn, "insert into login values ('$email','$password','student','active')");
        echo "<script>alert('Registration successfull, Please login'); window.location.href='index'</script>";
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
                    <h1>Signup</h1>
                </div>
                <div class="login-block">
                    <form method="post" action="">
                        <input type="text" name="fullname" placeholder="Fullname" required="">
                        <input type="text" name="phone" placeholder="Phone" required="">
                        <input type="text" name="email" placeholder="Email" required="">
                        <input type="text" name="matno" placeholder="Matriculation Number" required="">
                        <input type="password" name="password" class="lock" placeholder="Password">

                        <input type="submit" name="reg" value="Signup">	
                        <h3>Already a member?<a href="index.php">Login</a></h3>				
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




