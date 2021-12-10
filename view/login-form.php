<?php include ('../control/logincontrol.php') ; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header"><h2 class="glyphicon glyphicon-cutlery">  Chef's Place</h2></strong></div>
    <a href="../index.php" class="btn btn-warning">Home</a>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return LoginValidation()" method="POST">
				<center>
			
			<div>
     <h1 style="color:#D2691E;">SIGN IN</h2>
    </div>
	<tr><td><br></td></tr>


 <div class="container">
            <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
            <input type="text" class="form-control" name="username" placeholder="User Name"
            value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}"
            value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
            </div>
        </div>
    </div>
    <div>
    	<input type="checkbox" name="remember" > Remember me <br><br>
    	</div>
		<div>
			<input type="submit" name="login" value="Log in" class="btn">
		</div>
		<br><br><br>
			<tr>
				<td colspan="2">Dont have any account? Click here to <a href="registration-form.php">Registration</a></td>
			</tr>
			<br><br>
				<div>
					<span class="red">
						<?php
							if(isset($error))
							{
								echo $error;
							}
						?>
					</span>
				</div>
			</center>
 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>