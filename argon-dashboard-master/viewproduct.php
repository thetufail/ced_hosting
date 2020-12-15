<?php session_start(); ?>
<?php require_once '../admin/Product.php'; ?>
<?php

if (isset($_GET['logout']) && $_GET['logout'] != null) {
    unset($_SESSION['login']);
}

if (isset($_POST['addcategory']) && $_POST['addcategory'] != null) {
    $prod_name = (isset($_POST['subcat']) && $_POST['subcat'] != null) ? $_POST['subcat'] : '';
    $html = isset($_POST['html']) ? $_POST['html'] : '';
    $prod_launch_date = date("Y-m-d h:i:s");
    $add_subcategory = new Product();
    $add_subcategory->add_subcategory(1, $prod_name, $html, 1, $prod_launch_date, $db->conn);
}

?>
<?php require_once 'header.php'; ?>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-bell-55"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                            <!-- Dropdown header -->
                            <div class="px-3 py-3">
                                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                            </div>
                            <!-- List group -->
                            <div class="list-group list-group-flush">
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm"><?php if (isset($_SESSION['login'])) {
                                                                                    echo 'Admin';
                                                                                } else { ?> John Snow <?php } ?></h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm"><?php if (isset($_SESSION['login'])) {
                                                                                    echo 'Admin';
                                                                                } else { ?> John Snow <?php } ?></h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>3 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm"><?php if (isset($_SESSION['login'])) {
                                                                                    echo 'Admin';
                                                                                } else { ?> John Snow <?php } ?></h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>5 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm"><?php if (isset($_SESSION['login'])) {
                                                                                    echo 'Admin';
                                                                                } else { ?> John Snow <?php } ?></h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm"><?php if (isset($_SESSION['login'])) {
                                                                                    echo 'Admin';
                                                                                } else { ?> John Snow <?php } ?></h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>3 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- View all -->
                            <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ni ni-ungroup"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                            <div class="row shortcuts px-4">
                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                        <i class="ni ni-calendar-grid-58"></i>
                                    </span>
                                    <small>Calendar</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                        <i class="ni ni-email-83"></i>
                                    </span>
                                    <small>Email</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                        <i class="ni ni-credit-card"></i>
                                    </span>
                                    <small>Payments</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                        <i class="ni ni-books"></i>
                                    </span>
                                    <small>Reports</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                        <i class="ni ni-pin-3"></i>
                                    </span>
                                    <small>Maps</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                        <i class="ni ni-basket"></i>
                                    </span>
                                    <small>Shop</small>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?php if (isset($_SESSION['login'])) {
                                                                                        echo 'Admin';
                                                                                    } else { ?> John Snow <?php } ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="../login.php?logout=1" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Default</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row form_on_update" style="display:none">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="h1 text-dark">Update Product</div>
                                <div class="h4 text-gray">Enter Product Details</div>
                            </div>
                            <!-- <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div> -->
                        </div>
                    </div>
                    <!-- <form method="POST"> -->
                    <div class="form-group p-4 mb-0">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="form-control-label text-dark">Select Product Category <span class="comp">*</span></label>
                            <select name="prod_parent_id" class="form-control" id="prod_parent_id">
                                <option>Please Select</option>
                                <?php $show_categories = new Product(); ?>
                                <?php $result = $show_categories->show_category($db->conn); ?>
                                <?php foreach ($result as $key => $value) { ?>
                                    <option value=<?php echo $value['id']; ?>><?php echo $value['prod_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Enter Product Name <span class="comp">*</span></label>
                            <input class="form-control" type="hidden" id="prod_id" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Enter Product Name <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="prod_name" id="product_name" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Page HTML </label>
                            <input class="form-control" type="text" name="html" id="page_html">
                        </div>
                        <hr class="sthr">
                        <!-- <div class="card-header"> -->
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="h2 text-dark">Product Description</div>
                                <div class="h4 text-gray">Enter Product Description Below</div>
                                <hr>
                            </div>
                            <!-- <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                    </div> -->
                        </div>
                        <!-- </div> -->
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Enter Monthly Price <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="mon_price" id="monthly_price" required>
                            <p class="h6 py-2 text-gray">This would be monthly Plan</p>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Enter Annual Price <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="annual_price" id="annual_price" required>
                            <p class="h6 py-2 text-gray">This would be Annual Price</p>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">SKU <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="sku" id="sku" required>
                        </div>
                        <hr>
                        <!-- <div class="card-header"> -->
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="h2 text-dark">Features</div>
                            </div>
                            <!-- <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                    </div> -->
                        </div>
                        <!-- </div> -->
                        <hr>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Web Space (in GB) <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="web_space" id="web_space" required>
                            <p class="h6 py-2 text-gray">Enter 0.5 for 512MB</p>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Bandwidth (in GB) <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="bandwidth" id="bandwidth" required>
                            <p class="h6 py-2 text-gray">Enter 0.5 for 512MB</p>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Free Domain <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="free_domain" id="free_domain" required>
                            <p class="h6 py-2 text-gray">Enter 0 if no domain available in this service</p>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Language/ Technology Support <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="langsupport" id="language_support" required>
                            <p class="h6 py-2 text-gray">Separate by (,) Ex: PHP, MySQL, MongoDB</p>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label text-dark">Mailbox <span class="comp">*</span></label>
                            <input class="form-control" type="text" name="mailbox" id="mailbox" required>
                            <p class="h6 py-2 text-gray">Enter Number of mailbox will be provided, enter 0 if none</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="form-control-label text-dark">Change Availability <span class="comp">*</span></label>
                            <select name="availability_update" class="form-control is_available" id="exampleFormControlSelect1">
                                <option value='1'>Available</option>
                                <option value='0'>Unavailable</option>
                            </select>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button type="button" name="update" class="btn btn-default update">Update</button>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="h1 text-dark">Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive pb-4">
                        <table id="productsTable" class="table table-bordered table-striped p-4">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Parent Id</th>
                                    <th>Product Name</th>
                                    <th>Page HTML</th>
                                    <th>Product Availability</th>
                                    <th>Product Launch Date</th>
                                    <th>Product Id</th>
                                    <th>Enter Monthly Price</th>
                                    <th>Enter Annual Price</th>
                                    <th>SKU</th>
                                    <th>Web Space (in GB)</th>
                                    <th>Bandwidth (in GB)</th>
                                    <th>Free Domain</th>
                                    <th>Language / Technology Support</th>
                                    <th>Mailbox</th>
                                    <th>Actions</th>
                                    <!-- <th>Change Availability</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $view_products = new Product(); ?>
                                <?php $result = $view_products->view_products($db->conn); ?>
                                <?php foreach ($result as $key => $value) { ?>
                                    <tr>
                                        <!-- <input type="hidden" name=<?php echo $value['prod_id'];  ?> id="id_for_deletion" value=> -->
                                        <td><?php echo $value['id']; ?></td>
                                        <td><?php echo $value['prod_parent_id']; ?></td>
                                        <td><?php echo $value['prod_name']; ?></td>
                                        <td><?php echo $value['html']; ?></td>
                                        <?php if ($value['prod_available'] == 1) { ?>
                                            <?php $availability = 'Available'; ?>
                                        <?php } else { ?>
                                            <?php $availability = 'Unavailable'; ?>
                                        <?php } ?>
                                        <td><?php echo $availability; ?></td>
                                        <td><?php echo $value['prod_launch_date']; ?></td>
                                        <!-- <td><?php echo $value['id']; ?><?php echo $value['id']; ?><?php echo $value['id']; ?></td> -->
                                        <?php $view_category_of_products = new Product(); ?>
                                        <?php $result = $view_category_of_products->view_category_of_products($value['prod_parent_id'], $db->conn); ?>
                                        <td><?php echo $result; ?></td>
                                        <td><?php echo $value['mon_price']; ?></td>
                                        <td><?php echo $value['annual_price']; ?></td>
                                        <td><?php echo $value['sku']; ?></td>
                                        <?php $description = json_decode($value['description']); ?>
                                        <?php foreach ($description as $k => $v) { ?>
                                            <td><?php echo $v; ?></td>
                                        <?php } ?>
                                        <td>
                                            <button type="button" name="edit" class="edit" id=<?php echo $value['prod_id']; ?> data-updatepid=<?php echo $value['prod_id']; ?> data-pid=<?php echo $value['id']; ?> data-pparentid=<?php echo $value['prod_parent_id']; ?> data-pname=<?php echo $value['prod_name']; ?> data-phtml=<?php echo $value['html']; ?> data-pavailable=<?php echo $value['prod_available']; ?> data-plaunchdate=<?php echo $value['prod_launch_date']; ?> data-pmonprice=<?php echo $value['mon_price']; ?> data-pannualprice=<?php echo $value['annual_price']; ?> data-psku=<?php echo $value['sku']; ?> <?php $description = json_decode($value['description']); ?> <?php foreach ($description as $k => $v) { echo "data-" . $k . "='" . $v . "' "; } ?> data-pid=<?php echo $value['id']; ?>><i class="fa fa-edit" aria-hidden="true"></i></button>
                                            <button type="button" name="delete" class="delete" id=<?php echo $value['prod_id']; ?>><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            <!-- <button id="edit"><i class="fa fa-badge" aria-hidden="true"></i></button> -->
                                        </td>
                                        <!-- <td></td> -->
                                        <?php ?>
                                        <?php ?>
                                        <?php ?>
                                        <?php ?>
                                        <?php ?>
                                        <?php ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php' ?>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/js-cookie/js.cookie.js"></script>
<script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="assets/js/argon.js?v=1.2.0"></script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="assets/js/admin_functions.js"></script>
<script>
    $(document).ready(function() {
        $('#productsTable').DataTable();
    });
</script>
</body>

</html>