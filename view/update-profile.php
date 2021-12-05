<?php 
	include('../control/update-profilecontrol.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Food Ordering System</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table align="center">
			<tr>
				<td colspan="2"><h1>UPDATE PROFILE</h1></td>
			</tr>
			<tr>
				<td><label>Name: </label></td>
				<td>: <input type="text" name="name" id="name" value="<?php echo $name ?>">
					<span id="nameErr"class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Username </label></td>
				<td>: <input type="text" name="username" id="username" value="<?php echo $username ?>">
					<span id="usernameErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Email </label></td>
				<td>: <input type="text" name="email" id="email" value="<?php echo $email ?>">
					<span id="emailErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>User Type </label></td>
				<td><span class="green f20">: <?php echo $type ?></span> </td>
			</tr>
			<tr>
				<td><label>Address </label></td>
				<td>: <input type="text" name="address" id="address" value="<?php echo $address ?>">
					<span id="addressErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Phone </label></td>
				<td>: <input type="text" name="phone" id="phone" value="<?php echo $phone ?>">
					<span id="phoneErr"class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Date of birth &nbsp;&nbsp;</label></td>
				<td>: <input type="text" name="dob" id="dob" value="<?php echo $dob ?>">
					<span id="dobErr"class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>
				<td>: <input type="text" name="gender" id="gender" value="<?php echo $gender ?>">
					<span id="dobErr"class="red">*</span></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" class="btn"></td>
			</tr>
			<tr>
				<td colspan="2"><p class="green"><?php echo $successfulMessage; ?></p></td>
			</tr>
			<tr>
				<td colspan="2"><p class="red"><?php echo $errorMessage; ?></p></td>
			</tr>
		</table>
	</form>

 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>