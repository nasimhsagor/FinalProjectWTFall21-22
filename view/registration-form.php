<?php 
    include('../control/registrationControl.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header"><h2 class="glyphicon glyphicon-cutlery"> Chef's Place</h2></strong></div>
    <a href="../index.php" class="btn m-l-20">Home</a>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return RegistrationValidation()" method="POST" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td colspan="2"><h1 class="text_cntr">SIGN UP</h1></td>
                </tr>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td>: <input type="text" name="name" id="name">
                    <span id="nameErr"class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>: <input type="text" name="username" id="username">
                    <span id="usernameErr" class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>: <input type="text" name="password" id="password">
                    <span id="passwordErr" class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="Cpassword"> Confirm Password</label></td>
                    <td>: <input type="text" name="Cpassword" id="Cpassword">
                    <span id="cpassErr" class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>: <input type="text" name="email" id="email">
                    <span id="emailErr" class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="address">address</label></td>
                    <td>: <input type="text" name="address" id="address">
                    <span id="addressErr" class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone</label></td>
                    <td>: <input type="text" name="phone" id="phone">
                    <span id="phoneErr"class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="type">User Type</label></td>
                    <td>: <select name="type" id="type">
                        <option value="User">User</option>
                    </select>
                    <span id="usertypeErr" class="red">*</span></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth &nbsp;&nbsp;</label></td>
                    <td>: <input type="date" min="1953-01-01" max="1999-12-31" name="dob" id="dob">
                    <span id="dobErr"class="red">*</span></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="gender">Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="radio" name="gender" id="Male" value="Male">Male
                        <input type="radio" name="gender" id="Female" value="Female">Female
                        <input type="radio" name="gender" id="Other" value="Other">Other  
                        <span id="genderErr" class="red">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label for="image">Profile Image</label></td>
                    <td>  <input type="file" name="image" id="image">
                    <span id="imageErr" class="red">*</span></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td><input type="submit" name="submit" value="Register &nbsp;&nbsp;&nbsp;" class="btn"></td>
                    <td><input type="reset" Value="Reset" class="btn"></td>
                </tr>
                <tr>
                    <td><p class="green"><?php echo $successfulMessage; ?></p></td>
                </tr>
                <tr>
                    <td><p class="red"><?php echo $errorMessage; ?></p></td>
                </tr>
                <tr>
                    <td><a href="../view/login-form.php">Back To Login</a></td>
                </tr>
            </table>
            <br><br><br><br>
        </form>

    <?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>