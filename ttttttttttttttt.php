<?php
session_start();
print_r($_SESSION);
?>















<!-- <?php session_start(); ?> -->
<?php require_once 'admin/Product.php'; ?>
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
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <!--script-->
</head>

<body>
    <!---header--->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="sr-only">Toggle navigation</i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </button>
                        <div class="navbar-brand">
                            <h1><a href="index.php">Ced Hosting</a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                    <?php $show_categories = new Product(); ?>
                                    <?php $result = $show_categories->show_category($db->conn); ?>
                                    <?php foreach ($result as $key => $value) { ?>
                                        <input type="hidden" name=<?php echo $value['prod_parent_id']; ?> value=<?php echo $value['prod_parent_id']; ?>>
                                        <li><a href="catpage.php?id=<?php echo $value['id']; ?>"><?php echo $value['prod_name']; ?></a></li>
                                    <?php } ?>
                                        <!-- <li><a href="wordpresshosting.php">WordPress Hosting</a></li>
                                        <li><a href="windowshosting.php">Windows Hosting</a></li>
                                        <li><a href="cmshosting.php">CMS Hosting</a></li> -->
                                </ul>
                            </li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Cart <i class="fa fa-shopping-cart"></i></a></li>
                            <?php if (isset($_SESSION['login'])) { ?>
                                <li><a href="login.php?logout=1">Logout</a></li>
                            <?php } else { ?>
                                <li><a href="login.php">Login</a></li>
                            <?php } ?>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!---header--->




    	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.html">Planet Hosting</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home <i class="sr-only">(current)</i></a></li>
								<li class="active"><a href="about.html">About</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<i class="caret"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="pricing.html">Pricing</a></li>
											<li><a href="faq.html">FAQ's</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
											<li><a href="history.html">History</a></li>
											<li><a href="support.html">Support</a></li>
											<li><a href="templatesetting.html">Template setting</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="portfolio.html">Portfolio</a></li>
										</ul>
									</li>
								<li><a href="services.html">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a href="linuxhosting.html">Linux hosting</a></li>
										<li><a href="wordpresshosting.html">WordPress Hosting</a></li>
										<li><a href="windowshosting.html">Windows Hosting</a></li>
										<li><a href="cmshosting.html">CMS Hosting</a></li>
									</ul>			
								</li>
								<li><a href="codes.html">Codes</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->