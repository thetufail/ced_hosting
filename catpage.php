<?php session_start(); ?>
<?php include_once 'admin/Product.php';
$_SESSION['cart'] = [];
$_SESSION['count_product'] = 0;

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
    <title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Word press Hosting :: w3layouts</title>
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
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!--script-->
</head>

<body>
    <?php include_once 'header.php'; ?>

    <?php if (isset($_GET['id'])) { ?>
        <!---singleblog--->
        <div class="content">
            <div class="linux-section">
                <div class="container">

                    <div class="linux-grids">
                        <div class="col-md-8 linux-grid">
                            <h2><?php $view_category_of_products = new Product(); ?>
                                <?php $result = $view_category_of_products->view_category_of_products($_GET['id'], $db->conn); ?>
                                <?php echo $result; ?></h2>
                            <ul>
                                <li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>
                                <li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
                                <li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>
                                <li><span>Launch </span> your business with Rs. 2000* Google AdWords Credit *</li>
                                <li><span>30 day </span> Money Back Guarantee</li>
                            </ul>
                            <a href="#">view plans</a>
                        </div>
                        <div class="col-md-4 linux-grid1">
                            <img src="images/linux.png" class="img-responsive" alt="" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="tab-prices">
                <div class="container">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div class="linux-prices">
                                    <?php $view_products = new Product(); ?>
                                    <?php $result = $view_products->view_products_catpage($_GET['id'], $db->conn); ?>
                                    <?php foreach ($result as $key => $value) { ?>
                                        <div class="col-md-3 linux-price">
                                            <div class="linux-top">
                                                <h4><?php echo $value['prod_name']; ?></h4>
                                            </div>
                                            <div class="linux-bottom">
                                                <h5>$<?php echo $value['mon_price']; ?> <span class="month">per month</span></h5>
                                                <?php $description = json_decode($value['description']); ?>
                                                <?php foreach ($description as $k => $v) {
                                                    $web_space = $description->web_space;
                                                    $bandwidth = $description->bandwidth;
                                                    $free_domain = $description->free_domain;
                                                    $langsupport = $description->langsupport;
                                                    $mailbox = $description->mailbox;
                                                    break;
                                                } ?>
                                                <!-- <td><?php echo $v; ?></td> -->
                                                <h6><?php echo $free_domain; ?> Domain</h6>
                                                <ul>
                                                    <li><strong><?php echo $web_space; ?> GB</strong> Disk Space</li>
                                                    <li><strong><?php echo $bandwidth; ?> GB</strong> Data Transfer</li>
                                                    <li><strong><?php echo $langsupport; ?></strong><br> Languages Support</li>
                                                    <li><strong><?php echo $mailbox; ?></strong> Email Accounts</li>
                                                    <!-- <li><strong>Includes </strong> Global CDN</li> -->
                                                    <!-- <li><strong>High Performance</strong> Servers</li> -->
                                                    <li><strong>location</strong> : <img src="images/india.png"></li>
                                                </ul>
                                            </div>
                                            <button type="button" name="edit" class="buynow" id=<?php echo $value['prod_id']; ?> data-updatepid=<?php echo $value['prod_id']; ?> data-pid=<?php echo $value['id']; ?> data-pparentid=<?php echo $value['prod_parent_id']; ?> data-pname=<?php echo $value['prod_name']; ?> data-phtml=<?php echo $value['html']; ?> data-pavailable=<?php echo $value['prod_available']; ?> data-plaunchdate=<?php echo $value['prod_launch_date']; ?> data-pmonprice=<?php echo $value['mon_price']; ?> data-pannualprice=<?php echo $value['annual_price']; ?> data-psku=<?php echo $value['sku']; ?> <?php $description = json_decode($value['description']); ?> <?php foreach ($description as $k => $v) {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        echo "data-" . $k . "='" . $v . "' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } ?> data-pid=<?php echo $value['id']; ?>>Buy Now</i></button>
                                            <!-- <a href="#">buy now</a> -->
                                        </div>
                                    <?php } ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- clients -->
            <div class="clients">
                <div class="container">
                    <h3>Some of our satisfied clients include...</h3>
                    <ul>
                        <li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
                        <li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
                        <li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
                        <li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
                        <li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
                        <li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
                    </ul>
                </div>
            </div>
            <!-- clients -->
            <div class="whatdo">
                <div class="container">
                    <h3>Linux Features</h3>
                    <div class="what-grids">
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="what-grids">
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-move" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 what-grid">
                            <div class="what-left">
                                <i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
                            </div>
                            <div class="what-right">
                                <h4>Expert Web Design</h4>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php include_once 'footer.php'; ?>