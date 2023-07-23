<?php
session_start();
include 'include/connection.php';
$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : "";

if (isset($_POST["submit"])) {
    $appid = "APP-" . date("dismy");
    $useremail = $userid;
    $level = $_POST["level"];
    $matno = $_POST["matno"];
    $school_email = $_POST["semail"];
    $dept = $_POST["dept"];
    $graduation_year = $_POST["gradyear"];
    $submission_date = date("y-m-d");
    $appr_date = "";
    $comment = $_POST["comment"];
    $approval_comment = "";
    $fee = "";
    $status = "0";

    $insert_values = mysqli_query($conn, "insert into application values ('$appid','$useremail','$matno','$dept','$school_email','$level','$graduation_year','$submission_date','$appr_date','$approval_comment','$fee','$comment','$status')");
    if ($insert_values) {
        echo "<script>alert('Application submitted successfully.');</script>";
    } else {
        echo "<script>alert('Oops, please try again.');</script>";
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
        <script src="js/Chart.min.js"></script>
        <!--//charts-->
        <!-- geo chart -->
        <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
        <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
        <!-- Chartinator  -->
        <script src="js/chartinator.js" ></script>
        <script type="text/javascript">
            jQuery(function ($) {

                var chart3 = $('#geoChart').chartinator({
                    tableSel: '.geoChart',

                    columns: [{role: 'tooltip', type: 'string'}],

                    colIndexes: [2],

                    rows: [
                        ['China - 2015'],
                        ['Colombia - 2015'],
                        ['France - 2015'],
                        ['Italy - 2015'],
                        ['Japan - 2015'],
                        ['Kazakhstan - 2015'],
                        ['Mexico - 2015'],
                        ['Poland - 2015'],
                        ['Russia - 2015'],
                        ['Spain - 2015'],
                        ['Tanzania - 2015'],
                        ['Turkey - 2015']],

                    ignoreCol: [2],

                    chartType: 'GeoChart',

                    chartAspectRatio: 1.5,

                    chartZoom: 1.75,

                    chartOffset: [-12, 0],

                    chartOptions: {

                        width: null,

                        backgroundColor: '#fff',

                        datalessRegionColor: '#F5F5F5',

                        region: 'world',

                        resolution: 'countries',

                        legend: 'none',

                        colorAxis: {

                            colors: ['#679CCA', '#337AB7']
                        },
                        tooltip: {

                            trigger: 'focus',

                            isHtml: true
                        }
                    }


                });
            });
        </script>
        <!--geo chart-->

        <!--skycons-icons-->
        <script src="js/skycons.js"></script>
        <!--//skycons-icons-->
    </head>
    <body>	
        <div class="page-container">	
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <?php
                    include 'include/header.php';
                    ?>
                    <!--heder end here-->
                    <!-- script-for sticky-nav -->
                    <script>
            $(document).ready(function () {
                var navoffeset = $(".header-main").offset().top;
                $(window).scroll(function () {
                    var scrollpos = $(window).scrollTop();
                    if (scrollpos >= navoffeset) {
                        $(".header-main").addClass("fixed");
                    } else {
                        $(".header-main").removeClass("fixed");
                    }
                });

            });
                    </script>
                    <!-- /script-for sticky-nav -->
                    <!--inner block start here-->
                    <div class="inner-block">
                        <div class="typo-badges">
                            <div class="appearance">
                                <h3 class="ghj">Transcript Application</h3>
                                <div class="col-md-4">
                                    <p>Apply for transcript</p>
                                    <div class="signup-block">
                                        <form action="" method="post">
                                            <input type="text" name="matno" placeholder="Matriculation Number" required="">
                                            <input type="text" name="dept" placeholder="Department" required="">
                                            <input type="text" name="level" placeholder="Level e.g ND or HND" required="">
                                            <input type="text" name="gradyear" placeholder="Graduation Year" required="">
                                            <textarea rows="4" cols="25" name="comment" placeholder="Reason for application"></textarea>
                                            <input type="text" name="semail" placeholder="Receiving Institution's Email" required="">
                                            <input type="submit" name="submit" value="Submit">														
                                        </form>

                                    </div>                    
                                </div>
                                <div class="col-md-8">
                                    <p>MY APPLICATION(s)</p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Matno</th>
                                                <th>level</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sn = 0;
                                            $get_rec = mysqli_query($conn, "select * from application where email='$userid'");
                                            while ($row = mysqli_fetch_array($get_rec)) {
                                                $sn++;
                                                $appid = $row["appid"];
                                                $appemail = $row["email"];
                                                $appmatno = $row["matno"];
                                                $appdept = $row["dept"];
                                                $appfee = $row["fee"];
                                                $applevel = $row["level"];
                                                $appgraduation_date = $row["grad_date"];
                                                $appsubmission_date = $row["s_date"];
                                                $appapprove_date = $row["a_date"];
                                                $app_comment = $row["comment"];
                                                $app_status = $row["status"];
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn; ?></td>
                                                    <td><?php echo $appmatno; ?></td>
                                                    <td><?php echo $applevel; ?></td>
                                                    <td><?php
                                                        if ($app_status == "0") {
                                                            echo "Pending";
                                                        } else {
                                                            echo "Approved";
                                                        }
                                                        ?></td>
                                                    <?php
                                                    if ($app_status == "0" && $appfee=="") {
                                                        ?>
                                                        <td><a class="btn" href="payment?i=<?php echo base64_encode($appid); ?>">Pay Processing Fee </a></td>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <td><a class="btn" href="app-details?i=<?php echo base64_encode($appid); ?>">Details</a></td>
                                                        <?php
                                                    }
                                                    ?>
                                                </tr>
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <!--bagets-->
                        </div>
                    </div>
                    <!--inner block end here-->
                    <!--copy rights start here-->
                    <?php
                    include 'include/footer.php';
                    ?>
                    <!--COPY rights end here-->
                </div>
            </div>
            <!--slider menu-->
            <div class="clearfix"> </div>
            <?php
            include 'include/sidebar.php';
            ?>
            <div class="clearfix"> </div>
        </div>
        <!--slide bar menu end here-->
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                } else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }
                toggle = !toggle;
            });
        </script>
        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
        <script src="js/bootstrap.js"></script>
        <!-- mother grid end here-->
    </body>
</html>                     