<?php

require_once '../admin/Product.php';
session_start();
$errors = array();
$id = $_POST['id'];
// echo $id;

if (!empty($_POST['action']) && $_POST['action'] == 'edit') {
    $delete_product = new Product();
    $delete_product->delete_product($id, $db->conn);
}

if (!empty($_POST['action']) && $_POST['action'] == 'update') {
    $delete_product = new Product();
    $delete_product->delete_product($id, $db->conn);
}

if (!empty($_POST['action']) && $_POST['action'] == 'delete') {
    $pid = $_POST[''];
    $pparentid = $_POST['pparentid'];
    $pname = $_POST['pname'];
    $phtml = $_POST['phtml'];
    $pavailable = $_POST['pavailable'];
    $pmonprice = $_POST['pmonprice'];
    $pannualprice = $_POST['pannualprice'];
    $psku = $_POST['psku'];
    $web_spacefeatures = $_POST['web_spacefeatures'];
    $bandwidthfeatures = $_POST['bandwidthfeatures'];
    $free_domainfeatures = $_POST['free_domainfeatures'];
    $langsupportfeatures = $_POST['langsupportfeatures'];
    $mailboxfeatures = $_POST['mailboxfeatures'];
    $update_product = new Product();
    $update_product->update_tbl_product($id, $db->conn);
    $update_product->update_tbl_product_description($id, $db->conn);
}
