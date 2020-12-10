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

    
}