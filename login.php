<?php

session_start();

include_once 'admin/Dbcon.php';
include_once 'admin/User.php';

if (isset($_POST['login'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['pass']) ? md5($_POST['pass']) : '';

    $login_user = new User();
    $login_user->login($email, $password, $db->conn);
}

?>
<?php include_once 'header.php'; ?>

<!---login--->
<div class="content">
    <div class="main-1">
        <div class="container">
            <div class="login-page">
                <div class="account_grid">
                    <div class="col-md-6 login-left">
                        <h3>new customers</h3>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <a class="acount-btn" href="account.php">Create an Account</a>
                    </div>
                    <div class="col-md-6 login-right">
                        <h3>registered</h3>
                        <p>If you have an account with us, please log in.</p>
                        <form method="POST">
                            <div>
                                <span>Email Address<label>*</label></span>
                                <input type="email" name="email">
                            </div>
                            <div>
                                <span>Password<label>*</label></span>
                                <input type="password" name="pass">
                            </div>
                            <a class="forgot" href="#">Forgot Your Password?</a>
                            <input type="submit" value="Login" name="login">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login -->
<?php include_once 'footer.php'; ?>