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

    function add_subcategory($prod_parent_id, $prod_name, $link, $prod_available, $prod_launch_date, $conn)
    {
        $sql = "INSERT INTO `tbl_product` (`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES ('" . $prod_parent_id . "', '" . $prod_name . "', '" . $link . "', '" . $prod_available . "', '" . $prod_launch_date . "')";
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
            $last_id = $result->fetch_array()[0] ?? '';;
            return $last_id;
        }
    }

    function view_products($conn)
    {
        $a = array();
        $sql = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.id=`tbl_product_description`.`prod_id` WHERE `prod_parent_id` ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($a, $row);
            }
            return $a;
        }
    }
}
