<?php session_start(); ?>
<?php

if (isset($_GET['delete_product'])) {
    unset($_SESSION['cart'][$_GET['delete_product']]);
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($_GET['delete_product'] == $key) {
            $_SESSION['total_price'] -= $_SESSION['cart'][$key]['pmonprice'];
            break;
        }
    }
    array_values($_SESSION['cart']);
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
    <title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
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

<?php include_once 'header.php'; ?>

<!--cart--->
<!-- <div class="content"> -->
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SKU</th>
                                            <th>Product</th>
                                            <th>Duration</th>
                                            <th>Total</th>
                                            <th></th>
                                            <!-- <th>Quantity</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $products = $_SESSION['cart']; ?>
                                        <?php $_SESSION['total_price'] = 0; ?>
                                        <?php foreach ($products as $key => $value) { ?>
                                            <?php $_SESSION['total_price'] += $products[$key]['pmonprice']; ?>
                                            <tr>
                                                <td><?php echo $products[$key]['psku']; ?></td>
                                                <td><?php echo $products[$key]['pname']; ?></td>
                                                <td>$<?php echo $products[$key]['pmonprice']; ?> /month</td>
                                                <td>$<?php echo $products[$key]['pmonprice']; ?></td>
                                                <td><a class="remove" href="cart.php?delete_product=<?php echo $key ?>">
                                                        <fa class="fa fa-close"></fa>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Cart Totals</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>$<?php if (isset($_SESSION['total_price']) && $_SESSION['total_price'] != null) { echo  $_SESSION['total_price']; } else { echo 0; } ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>$<?php if (isset($_SESSION['total_price']) && $_SESSION['total_price'] != null) { echo  $_SESSION['total_price']; } else { echo 0; } ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- </div> -->

<?php include_once 'footer.php'; ?>