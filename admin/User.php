<?php

require "vendor/autoload.php";
require_once 'Dbcon.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class User
{
    function signup($email, $name, $mobile, $email_approved, $phone_approved, $active, $is_admin, $sign_up_date, $password, $security_question, $security_answer, $conn)
    {
        $sql = "INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`, `security_question`,`security_answer`) VALUES ('" . $email . "', '" . $name . "', '" . $mobile . "', " . $email_approved . ", " . $phone_approved . ", " . $active . ", " . $is_admin . ", '" . $sign_up_date . "', '" . $password . "', '" . $security_question . "', '" . $security_answer . "' )";
        if ($conn->query($sql) === true) {
            echo 'okay';
            // echo "<br> " . $sql;
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
                    $_SESSION['login'] = array('id' => $row['id'], 'email' => $row['email'], 'name' => $row['name'], 'mobile' => $row['mobile'], 'email_approved' => $row['email_approved'], 'phone_approved' => $row['phone_approved'], 'active' => $row['active'], 'is_admin' => $row['is_admin'], 'sign_up_date' => $row['sign_up_date']);
                    header('Location:inde.php');
                    ?>
                    <script>alert('Yes');</script>
                    <!-- echo $_SESSION; -->
                    <?php } else if (($row['email_approved'] == 1 || $row['phone_approved'] == 1) && $row['active'] == 1 && $row['is_admin'] == 1 && $row['password'] == $password) {
                        $_SESSION['login'] = array('id' => $row['id'], 'email' => $row['email'], 'name' => $row['name'], 'mobile' => $row['mobile'], 'email_approved' => $row['email_approved'], 'phone_approved' => $row['phone_approved'], 'active' => $row['active'], 'is_admin' => $row['is_admin'], 'sign_up_date' => $row['sign_up_date']);
                        header('Location:argon-dashboard-master/index.php');
                }
            }
        } else {
            echo "haha";
        }
    }

    function verify_email($email) 
    {
        $developmentMode = true;
        $mailer = new PHPMailer($developmentMode);

        try {
            $mailer->SMTPDebug = 2;
            $mailer->isSMTP();
            if ($developmentMode) {
                $mailer->SMTPOptions = [
                'ssl'=> [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                ]
                ];
            }
            $mailer->Host = 'ssl://smtp.gmail.com';
            $mailer->SMTPAuth = true;
            $mailer->Username = 'neverlikebefore01@gmail.com';
            $mailer->Password = 'ctrlaltmp4';
            $mailer->SMTPSecure = 'tls';
            $mailer->Port = 465;

            $mailer->setFrom('neverlikebefore01@gmail.com', 'Name of sender');
            $mailer->addAddress($email, 'Name of recipient');

            $mailer->isHTML(true);
            $mailer->Subject = 'PHPMailer Test';
            $mailer->Body = 'http://localhost/ced_hosting/verification.php?email='.$email.'';

            $mailer->send();
            $mailer->ClearAllRecipients();
            echo "MAIL HAS BEEN SENT SUCCESSFULLY";
        } catch (Exception $e) {
            echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
        }  
    }
}