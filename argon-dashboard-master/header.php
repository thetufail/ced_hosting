<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css" type="text/css">
  <!-- Data Table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <script src="https://cdn.tiny.cloud/1/bfnccg4nkcjyqkebganbu324emdmtaazp9vgg1iltvsjn90q/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector: 'textarea.html',
      skin: "bootstrap",
      plugins: "lists, link, image, media",
      toolbar: "h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help",
      menubar: false,
      setup: (editor) => {
        // Apply the focus effect
        editor.on("init", () => {
          editor.getContainer().style.transition =
            "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
        });
        editor.on("focus", () => {
          (editor.getContainer().style.boxShadow =
            "0 0 0 .2rem rgba(0, 123, 255, .25)"),
          (editor.getContainer().style.borderColor = "#80bdff");
        });
        editor.on("blur", () => {
          (editor.getContainer().style.boxShadow = ""),
          (editor.getContainer().style.borderColor = "");
        });
      },
    });
  </script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link active" href="#products" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="products">
                <i class="ni ni-shop text-orange"></i>
                <span class="nav-link-text">
                  <h4>Products</h4>
                </span>
              </a>
              <div class="collapse" id="products">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="createcategory.php" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> Create Category </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="addproduct.php" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Add Product </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="viewproduct.php" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> View Products </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Create New Offers </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#orders" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="orders">
                <i class="ni ni-collection text-dark"></i>
                <span class="nav-link-text">
                  <h4>Orders</h4>
                </span>
              </a>
              <div class="collapse" id="orders">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> Pending Orders </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Completed Orders </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Cancelled Orders </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Generate Invoice </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#services" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="services">
                <i class="ni ni-delivery-fast text-green"></i>
                <span class="nav-link-text">
                  <h4>Services</h4>
                </span>
              </a>
              <div class="collapse" id="services">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> Active Services </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Expired Services </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#users" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="users">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">
                  <h4>Users</h4>
                </span>
              </a>
              <div class="collapse" id="users">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> All User List </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Create New User </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#blog" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="blog">
                <i class="ni ni-bullet-list-67 text-info"></i>
                <span class="nav-link-text">
                  <h4>Blog</h4>
                </span>
              </a>
              <div class="collapse" id="blog">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> Add New Blog </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> View all Blogs </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#accounts" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="accounts">
                <i class="ni ni-settings-gear-65 text-red"></i>
                <span class="nav-link-text">
                  <h4>Accounts</h4>
                </span>
              </a>
              <div class="collapse" id="accounts">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> D </span> -->
                      <span class="sidenav-normal"> Update Company Info </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Change Security Ques </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      <!-- <span class="sidenav-mini-icon"> A </span> -->
                      <span class="sidenav-normal"> Change Password </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>