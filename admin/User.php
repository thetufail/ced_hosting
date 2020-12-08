<?php

include_once 'Dbcon.php';

class User
{
    function signup($email, $name, $mobile, $email_approved, $phone_approved, $active, $is_admin, $sign_up_date, $password, $security_question, $security_answer, $conn)
    {
        $sql = "INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`, `security_question`,`security_answer`) VALUES ('" . $email . "', '" . $name . "', '" . $mobile . "', " . $email_approved . ", " . $phone_approved . ", " . $active . ", " . $is_admin . ", '" . $sign_up_date . "', '" . $password . "', '" . $security_question . "', '" . $security_answer . "' )";
        if ($conn->query($sql) === true) {
            // echo 'okay';
            echo "<br> " . $sql;
        } else {
            echo 'not okay';
            echo "<br> " . $sql;
        }
    }

    function login($email, $password, $conn)
    {
        $sql = "SELECT * FROM `tbl_user` WHERE `email`='" . $email . "' AND `password`='" . $password . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // echo $sql;
                if (($row['email_approved'] == 1 || $row['phone_approved'] == 1) && $row['active'] == 1 && $row['is_admin'] == 0 && $row['password'] == $password) {
                    $_SESSION['userdata'] = array('id' => $row['id'], 'email' => $row['email'], 'name' => $row['name'], 'mobile' => $row['mobile'], 'email_approved' => $row['email_approved'], 'phone_approved' => $row['phone_approved'], 'active' => $row['active'], 'is_admin' => $row['is_admin'], 'sign_up_date' => $row['sign_up_date'], );
                    ?><script>alert('Yes');</script><?php
                    // echo $_SESSION;
                }
            }
        }
        else {
            echo "haha";
        }
    }
}
