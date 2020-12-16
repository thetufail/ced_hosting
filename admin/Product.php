<?php

require_once 'Dbcon.php';
class Product
{
    function show_category($conn)
    {
        $a = array();
        $sql = "SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($a, $row);
            }
            return $a;
        } else {
            echo "<br> " . $sql;
            echo 'not okay';
        }
    }

    function add_subcategory($prod_parent_id, $prod_name, $html, $prod_available, $prod_launch_date, $conn)
    {
        $sql = "INSERT INTO `tbl_product` (`prod_parent_id`, `prod_name`, `html`, `prod_available`, `prod_launch_date`) VALUES ('" . $prod_parent_id . "', '" . $prod_name . "', '" . $html . "', '" . $prod_available . "', '" . $prod_launch_date . "')";
        $conn->query($sql);
    }

    function add_product_description($prod_id, $description, $mon_price, $annual_price, $sku, $conn)
    {
        $sql = "INSERT INTO `tbl_product_description` (`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES ('" . $prod_id . "', '" . $description . "', '" . $mon_price . "', '" . $annual_price . "', '" . $sku . "')";
        $conn->query($sql);
    }

    function get_last_id($conn)
    {
        $sql = "SELECT MAX(`id`) FROM `tbl_product`";
        $result = $conn->query($sql);
        if ($result == true) {
            $last_id = $result->fetch_array()[0] ?? '';
            return $last_id;
        }
    }

    function view_products($conn)
    {
        $a = array();
        $sql = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.id=`tbl_product_description`.`prod_id`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($a, $row);
            }
            return $a;
        }
    }

    function view_products_catpage($id, $conn)
    {
        $a = array();
        $sql = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.id=`tbl_product_description`.`prod_id` WHERE `prod_parent_id` = '".$id."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($a, $row);
            }
            return $a;
        }
    }

    function view_category_of_products($prod_parent_id, $conn)
    {
        // $a = array();
        $sql = "SELECT `prod_name` FROM `tbl_product` WHERE `id`= '" . $prod_parent_id . "'";
        $result = $conn->query($sql);
        if ($result == true) {
            $prod_name = $result->fetch_array()[0] ?? '';
            return $prod_name;
        }
    }

    function category_delete_product($id, $conn)
    {
        $sql = "DELETE FROM `tbl_product` WHERE `id`='" . $id . "'";
        $conn->query($sql);
    }

    function delete_product($id, $conn)
    {
        $sql = "DELETE FROM `tbl_product_description` WHERE `prod_id`='" . $id . "'";
        $conn->query($sql);
        $sql = "DELETE FROM `tbl_product` WHERE `id`='" . $id . "'";
        $conn->query($sql);
        // if ($conn->query($sql) === true) {
        // header('Location: http://localhost/cab_booking/admin/locations.php');
        // return;
        // } else {
        // echo 'not okay';
        // echo "<br> " . $sql;
        // }
    }

    function update_tbl_product($id, $prod_parent_id, $prod_name, $html, $prod_available, $conn)
    {
        echo "<script>alert('Hii');</script>";
        $sql = "UPDATE `tbl_product` SET `prod_parent_id`='" . $prod_parent_id . "', `prod_name` = '" . $prod_name . "', `html` = '" . $html . "', `prod_available` =  '" . $prod_available . "' WHERE `id` = '" . $id . "'";
        echo $sql;
        $conn->query($sql);
    }

    function update_tbl_product_description($prod_id, $description, $mon_price, $annual_price, $sku, $conn)
    {
        echo "<script>alert('Hii');</script>";
        $sql = "UPDATE `tbl_product_description` SET `description`='" . $description . "', `mon_price` = '" . $mon_price . "', `annual_price` = '" . $annual_price . "', `sku` = '" . $sku . "' WHERE `prod_id` = '" . $prod_id . "'";
        echo $sql;
        $conn->query($sql);
    }
}