<?php

include_once 'admin/Dbcon.php';
include_once 'admin/User.php';

if (isset($_POST['signup'])) {
    $name = (isset($_POST['name']) && $_POST['name'] != null) ? $_POST['name'] : '';
    $email = (isset($_POST['email']) && $_POST['email'] != null) ? $_POST['email'] : '';
    $mobile = (isset($_POST['mobno']) && $_POST['mobno'] != null) ? $_POST['mobno'] : '';
    $sign_up_date = date("Y-m-d h:i:s");
    $password = (isset($_POST['pass']) && $_POST['pass'] != null) ? md5($_POST['pass']) : '';
    $repassword = (isset($_POST['repass']) && $_POST['repass'] != null) ? md5($_POST['repass']) : '';
    $security_question = (isset($_POST['security_question']) && $_POST['security_question'] != null) ? $_POST['security_question'] : '';
    $security_answer = (isset($_POST['security_answer']) && $_POST['security_answer'] != null) ? $_POST['security_answer'] : '';
    if ($password != $repassword || $name == ' ' || $name == ' ' || $mobile == ' ') {
        $errors[] = array('input' => 'password', 'message' => 'password doesn\'t match');
    }
    $sign_up_user = new User();
    $sign_up_user->signup($email, $name, $mobile, 0, 0, 0, 0, $sign_up_date, $password, $security_question, $security_answer, $db->conn);
}

?>
<?php include_once 'header.php'; ?>

<!---login--->
<div class="content">
    <!-- registration -->
    <div class="main-1">
        <div class="container">
            <div class="register">
                <form method="POST">
                    <div class="register-top-grid">
                        <h3>personal information</h3>
                        <div>
                            <span>Name<label>*</label></span>
                            <input type="text" name="name" class="name" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" required>
                        </div>
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email" class="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="yourname@example.com" required>
                        </div>
                        <div>
                            <!-- ^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$ -->
                            <span>Mobile<label>*</label></span>
                            <input type="text" name="mobno" class="mobno" pattern="(^0?([1-9]{1})([0-9]{9}))" required>
                        </div>
                        <div>
                            <span>Security Question<label>*</label></span>
                            <select id="security_question" name="security_question">
                                <option selected>Choose one of the following as security question</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                            </select>
                            <input type="text" name="security_answer" title="AlphaNumeric are allowed" pattern="^[0-9]*[A-Za-z]+[A-Za-z0-9]*$">
                        </div>
                        <!-- pattern="^(([0-9][a-zA-Z]) | ([a-zA-Z][0-9]?) | ([a-zA-Z]))" -->
                        <!-- pattern="^([a-z+A-Z+0-9+]|([a-zA-Z]+))$" -->
                        <div class="clearfix"> </div>
                        <a class="news-letter" href="#">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                        </a>
                    </div>
                    <div class="register-bottom-grid">
                        <h3>login information</h3>
                        <div>
                            <span>Password<label>*</label></span>
                            <input type="password" name="pass" pattern="^[a-zA-Z0-9/_*/@*/.*/#*/%*/!*/=*/$*]{8,16}$" title="should contain a-z, A-Z, 0-9, _, @, ., #, %, !, $" required>
                        </div>
                        <div>
                            <span>Confirm Password<label>*</label></span>
                            <input type="password" name="repass" pattern="^[a-zA-Z0-9/_*/@*/.*/#*/%*/!*/=*/$*]{8,16}$" title="should contain a-z, A-Z, 0-9, _, @, ., #, %, !, $" required>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="register-but">
                        <input type="submit" name="signup" value="submit">
                        <div class="clearfix"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- registration -->

<!-- login -->
<?php include_once 'footer.php'; ?>