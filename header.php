<?php require_once 'admin/Product.php'; ?>
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
                        <h1><a href="index.php"><img width="250" height="80" src="images/20201214_015355.png" alt="Ced Hosting"></a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="inde.php">Home <i class="sr-only">(current)</i></a></li>
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