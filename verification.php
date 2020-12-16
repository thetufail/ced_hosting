<?php session_start(); ?>
<?php

require_once 'admin/Dbcon.php';
include_once 'header.php';

?>

            <form method="POST">
                <div class="verify">
                    <h1></h1>
                    <input name="verifyEmail" type="hidden">
                    <input name="verifyMobile" type="hidden">
                    <input type="submit" name="verifyEmail" value="Verify Email">
                    <input type="submit" name="verifyMobile" value="Verify Mobile">
                </div>
                <!-- <div class="clearfix"></div> -->
            </form>
<?php include_once 'footer.php'; ?>