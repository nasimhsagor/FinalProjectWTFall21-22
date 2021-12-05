<?php 
    include ('../control/changePasswordControl.php') ; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="header"><h2>Online Food Ordering System</h2></strong></div>
    <p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
    <h1>Change Password</h1>
    <h2>Welcome, <?php echo $name ?> | <span class="green">change your password securely</span></h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return ChangePasswordValidation()" method="POST">
        <table align="center">
            <tr>
                <td><label for="currentpassword">Current Password</label></td>
                <td>: <input type="text" name="currentpassword" id="currentpassword">
                <input type="hidden" name="oldpassword" id="oldpassword" value="<?php echo $password; ?>">
                <span id="currentpasswordErr" class="red">*</span></td>
            </tr>
            <tr>
                <td><label for="newpassword">New Password</label></td>
                <td>: <input type="text" name="newpassword" id="newpassword">
                <span id="newpasswordErr" class="red">*</span></td>
            </tr>
            <tr>
                <td><label for="confirmpassword">Confirm Password</label></td>
                <td>: <input type="text" name="confirmpassword" id="confirmpassword">
                <span id="confirmpasswordErr" class="red">*</span></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Change Password">
                </td>
                <td>
                    <p style="color:green;"><?php echo $successfulMessage; ?></p>
                    <p style="color:red;"><?php echo $errorMessage; ?></p>
                </td>
            </tr>
        </table>
    </form>
 
    <?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
 
</body>
</html>