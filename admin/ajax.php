<?php 

session_start();
require_once 'Product.php';
$errors = array();

$key = $_POST['key'];
// echo $key;
// echo $_SESSION['isBlock'][$key]['`user_name`'];
// exit;
$username = $_POST['username'];
$status = $_POST['current_status'];
print_r($_SESSION['isBlock'][$_POST['key']]);
// exit;