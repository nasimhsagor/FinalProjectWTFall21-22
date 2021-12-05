<?php 
	include('../control/profilecontrol.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Chef's Place</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	
	<table align="center">
		<tr>
			<td colspan="2"><h1>PROFILE VIEW</h1></td>
		</tr>
		<tr>
			<td><label>Name: </label></td>
			<td><span class="green f-size20">: <?php echo $name ?></span></td>
			<td rowspan="9">&nbsp;&nbsp;&nbsp;&nbsp;<img class="profile_img" src="../resources/user_img/<?php echo $image?>" alt="<?php echo $name ?>"></td>
		</tr>
		<tr>
			<td><label>Username </label></td>
			<td><span class="green f20">: <?php echo $username ?></span> </td>
		</tr>
		<tr>
			<td><label>Password </label></td>
			<td><span class="green f20">: *********</span> </td>
		</tr>
		<tr>
			<td><label>Email </label></td>
			<td><span class="green f20">: <?php echo $email ?></span> </td>
		</tr>
		<tr>
			<td><label>User Type </label></td>
			<td><span class="green f20">: <?php echo $type ?></span> </td>
		</tr>
		<tr>
			<td><label>Address </label></td>
			<td><span class="green f20">: <?php echo $address ?></span> </td>
		</tr>
		<tr>
			<td><label>Phone </label></td>
			<td><span class="green f20">: <?php echo $phone ?></span> </td>
		</tr>
		<tr>
			<td><label>Date of birth &nbsp;&nbsp;</label></td>
			<td><span class="green f20">: <?php echo $dob ?></span> </td>
		</tr>
		<tr>
			<td><label>Gender </label></td>
			<td><span class="green f20">: <?php echo $gender ?></span></td>
		</tr>
		<tr>
			<td>
				<a href="../view/update-profile.php">Update Profile</a>
			</td>
		</tr>
	</table>

 <?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>