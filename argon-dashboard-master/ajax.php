<?php

require_once '../admin/Product.php';
session_start();
$errors = array();
// echo $id;

    // -------------- CATEGORY TABLE --------------

if (!empty($_POST['action']) && $_POST['action'] == 'delete_category') {
    $id = $_POST['id'];
    $delete_product = new Product();
    $delete_product->category_delete_product($id, $db->conn);
}

if (!empty($_POST['action']) && $_POST['action'] == 'update_category') {
    echo "<script>alert('Hiiiiii');</script>";
    $id = $_POST['id'];
    $pparentid = $_POST['pparentid'];
    $pname = $_POST['pname'];
    $phtml = $_POST['phtml'];
    $pavailable = $_POST['pavailable'];
    
    $update_product = new Product();
    $update_product->update_tbl_product($id, $pparentid, $pname, $phtml, $pavailable, $db->conn);
}

    // -------------- PRODUCTS TABLE --------------

if (!empty($_POST['action']) && $_POST['action'] == 'delete') {
    $id = $_POST['id'];
    $delete_product = new Product();
    $delete_product->delete_product($id, $db->conn);
}

if (!empty($_POST['action']) && $_POST['action'] == 'update') {
    echo "<script>alert('Hiiiiii');</script>";
    $pid = $_POST['pid'];
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

    $features = array('web_space' => $web_spacefeatures, 'bandwidth' => $bandwidthfeatures, 'free_domain' => $free_domainfeatures, 'langsupport' => $langsupportfeatures,  'mailbox' => $mailboxfeatures);
    $description = json_encode($features);

    $update_product = new Product();
    $update_product->update_tbl_product($pid, $pparentid, $pname, $phtml, $pavailable, $db->conn);
    $update_product->update_tbl_product_description($pid, $description, $pmonprice, $pannualprice, $psku, $db->conn);
}