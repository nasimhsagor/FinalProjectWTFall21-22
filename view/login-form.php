<?php include ('../control/logincontrol.php') ; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Food Ordering System</h2></strong></div>
    <a href="../index.php" class="btn m-l-20">Home</a>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return LoginValidation()" method="POST">
		<table align="center">
			<tr>
				<td colspan="2"><h1 class="text_cntr">LOGIN FORM</h1></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><label for="username">Username</label></td>
				<td>: <input type="text" name="username" id="username" 
					value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
				<span id="usernameErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td>: <input type="password" name="password" id="password" 
					value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
				<span id="passwordErr" class="red">*</span></td>
			</tr>
			<tr>
				<td colspan="2"><input type="checkbox" name="remember" > Remember me <br><br></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="Log in" class="btn"></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2">Dont have any account? Click here to <a href="registration-form.php">Registration</a></td>
			</tr>
			<tr>
				<td colspan="2">
					<span class="red">
						<?php
							if(isset($error))
							{
								echo $error;
							}
						?>
					</span>
				</td>
			</tr>
		</table>
	</form>

 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>