<?php session_start(); ?>
<?php require_once 'admin/Dbcon.php'; ?>
<?php require_once 'admin/User.php'; ?>
<?php

if (isset($_POST['verifyOTPbyEmail']) && $_POST['verifyOTPbyEmail'] != null) {
    $opt_by_email = $_POST['enterOTPbyemail'];
    if (isset($_SESSION['otp']) && $opt_by_email == $_SESSION['otp']) {
        $update_signup_information = new User();
        $update_signup_information->update_signup_information($_SESSION['id'], 1, 0, 1, $db->conn);
    } else { ?>
        <script>
            alert('OTP verification failed. Please re-enter OTP.');
        </script>
    <?php

    }
}

if (isset($_POST['verifyOTPbyMobile']) && $_POST['verifyOTPbyMobile'] != null) {
    $opt_by_mobile = $_POST['enterOTPbymobile'];
    if (isset($_SESSION['otp']) && $opt_by_mobile == $_SESSION['otp']) {
        $update_signup_information = new User();
        $update_signup_information->update_signup_information($_SESSION['id'], 0, 1, 1, $db->conn);
    } else { ?>
        <script>
            alert('OTP verification failed. Please re-enter OTP.');
        </script>
<?php

    }
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!---fonts-->
    <link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!---fonts-->
    <!--script-->
    <script src="js/modernizr.custom.97074.js"></script>
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--lightboxfiles-->
    <script type="text/javascript">
        $(function() {
            $('.team a').Chocolat();
        });
    </script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript">
        $(function() {

            $(' #da-thumbs > li ').each(function() {
                $(this).hoverdir();
            });

        });
    </script>
    <!--script-->
</head>

<body>
    <?php include_once 'header.php';

    ?>

    <form method="POST">
        <div class="verify">
            <p class="h4 py-2">Please enter the OTP</p>
            <!-- <input name="verifyEmail" type="hidden"> -->
            <!-- <input name="verifyMobile" type="hidden"> -->
            <input name="enterOTPbyemail" type="text">
            <input type="submit" name="verifyOTPbyEmail" value="Verify Email">
            <p class="h5 text-center">OR</p>
            <input name="enterOTPbymobile" type="text">
            <input type="submit" name="verifyOTPbyMobile" value="Verify Mobile">
        </div>
        <!-- <div class="clearfix"></div> -->
    </form>
    <?php include_once 'footer.php'; ?>