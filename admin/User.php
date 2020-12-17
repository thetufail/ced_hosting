<?php

require_once 'Dbcon.php';

class User
{
    function signup($email, $name, $mobile, $email_approved, $phone_approved, $active, $is_admin, $sign_up_date, $password, $security_question, $security_answer, $conn)
    {
        $sql = "SELECT * FROM tbl_user WHERE `email` = '" . $email . "' OR `mobile` = '" . $mobile . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
?>
            <script>
                alert('User already exists.');
            </script>
            <?php } else {

            $sql = "INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`, `security_question`,`security_answer`) VALUES ('" . $email . "', '" . $name . "', '" . $mobile . "', " . $email_approved . ", " . $phone_approved . ", " . $active . ", " . $is_admin . ", '" . $sign_up_date . "', '" . $password . "', '" . $security_question . "', '" . $security_answer . "' )";
            if ($conn->query($sql) === true) {
                $last_id = $conn->insert_id;
                if (isset($_SESSION['email'])) {
                    // generate OTP
                    $otp = rand(100000, 999999);
                    // Send OTP
                    $send_otp = new User();
                    $send_otp->sendOTP($email, $otp);
                    $send_otp->sendOTPmobile($mobile, $otp);
                    $mail_status = 1;
                    if ($mail_status == 1) {
                        $_SESSION['id'] = $last_id;
                        $_SESSION['otp'] = $otp;
                        header('Location: verification.php');
                    }
                }
                echo 'okay';
                echo "<br> " . $sql;
            } else {
                echo 'not okay';
                echo "<br> " . $sql;
            }
        }
    }

    function update_signup_information($id, $email_approved, $phone_approved, $active, $conn)
    {
        $sql = "UPDATE `tbl_user` SET `email_approved` = '" . $email_approved . "' , `phone_approved` = '" . $phone_approved . "', `active` = '" . $active . "' WHERE `id` = '" . $id . "'";
        if ($conn->query($sql) === true) {
            unset($_SESSION['otp']);
            unset($_SESSION['id']);
            unset($_SESSION['email']);
            unset($_SESSION['mobno']);
            header('Location: http://localhost/ced_hosting/login.php');
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
                    <script>
                        alert('Yes');
                    </script>
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
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    ]
                ];
            }
            $mailer->Host = 'ssl://smtp.gmail.com';
            $mailer->SMTPAuth = true;
            $mailer->Username = 'neverlikebefore01@gmail.com';
            $mailer->Password = '';
            $mailer->SMTPSecure = 'tls';
            $mailer->Port = 465;

            $mailer->setFrom('neverlikebefore01@gmail.com', 'Name of sender');
            $mailer->addAddress($email, 'Name of recipient');

            $mailer->isHTML(true);
            $mailer->Subject = 'PHPMailer Test';
            $mailer->Body = 'http://localhost/ced_hosting/verification.php?email=' . $email . '';

            $mailer->send();
            $mailer->ClearAllRecipients();
            echo "MAIL HAS BEEN SENT SUCCESSFULLY";
        } catch (Exception $e) {
            echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
        }
    }

    function sendOTP($email, $otp)
    {
        require('phpmailer/class.phpmailer.php');
        require('phpmailer/class.smtp.php');

        $message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls'; // tls or ssl
        $mail->Port     = "587";
        $mail->Username = "neverlikebefore01@gmail.com";
        $mail->Password = "";
        $mail->Host     = "smtp.gmail.com";
        $mail->Mailer   = "smtp";
        $mail->SetFrom("neverlikebefore01@gmail.com", "web");
        $mail->AddAddress($email);
        $mail->Subject = "OTP to Login";
        $mail->MsgHTML($message_body);
        $mail->IsHTML(true);
        $result = $mail->Send();
        return $result;
    }

    function sendOTPmobile($mobile, $otp)
    {
        $message = "Your One Time Password is " . $otp;
        $fields = array(
            "sender_id" => "FSTSMS",
            "message" => "$message",
            "language" => "english",
            "route" => "p",
            "numbers" => "$mobile",
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($fields),
            CURLOPT_HTTPHEADER => array(
                "authorization: ",
                "accept: */*",
                "cache-control: no-cache",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}
