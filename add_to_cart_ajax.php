<?php

session_start();
// $_SESSION['cart'] = [];

if (!empty($_POST['action']) && $_POST['action'] == 'add to cart') {
    // echo "<script>alert('Hiiiiii');</script>";
    $pid = $_POST['pid'];
    $pparentid = $_POST['pparentid'];
    $pname = $_POST['pname'];
    $phtml = $_POST['phtml'];
    $pavailable = $_POST['pavailable'];
    $pmonprice = $_POST['pmonprice'];
    $pannualprice = $_POST['pannualprice'];
    $psku = $_POST['psku'];
    $web_space = $_POST['web_space'];
    $bandwidth = $_POST['bandwidth'];
    $free_domain = $_POST['free_domain'];
    $langsupport = $_POST['langsupport'];
    $mailbox = $_POST['mailbox'];

    $product = array('psku' => $psku, 'pname' => $pname, 'pmonprice' => $pmonprice, 'pannualprice' => $pannualprice, 'pannualprice' => $pannualprice);
    // $description = json_encode($features);
    array_push($_SESSION['cart'], $product);
    $product_count = $_SESSION['count_product'] += 1;
    echo $product_count;

    // $update_product = new Product();
    // $update_product->update_tbl_product($pid, $pparentid, $pname, $phtml, $pavailable, $db->conn);
    // $update_product->update_tbl_product_description($pid, $description, $pmonprice, $pannualprice, $psku, $db->conn);
}

?>