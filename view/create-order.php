<?php 
	include('../control/create-orderControl.php'); 
	include('../control/sessioncontrol.php');
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
	<p><a href="../view/home-page.php" class="link-hvr"> Back to Home</a><p>
	<p><a href="../view/view-menu-for-order.php" class="link-hvr">Cancel and Back to Menu</a><p>
	<form action="" method="POST">
		<table align="center">
			<tr>
				<td colspan="2"><h1>CONFIRM ORDER</h1></td>
			</tr>
			<tr>
				<td><label>Food ID </label></td>
				<td>: <span class="green f20"><?php echo $id ?></span>
				<input type="hidden" name="username" value="<?php echo $user ?>">
				<input type="hidden" name="food_id" value="<?php echo $id ?>"> </td>
				<td rowspan="5"><img src="../resources/food_img/<?php echo $image ?>" alt="Food" width="150px"></td>
			</tr>
			<tr>
				<td><label>Food Name </label></td>
				<td>: <span class="green f20"> <?php echo $foodname ?></span>
					  <input type="hidden" name="foodname" id="foodname" value="<?php echo $foodname ?>"></td>
			</tr>
			<tr>
				<td><label>Category </label></td>
				<td>: <span class="green f20"> <?php echo $category ?></span>
				 <input type="hidden" name="category" id="category" value="<?php echo $category ?>"></td>
			</tr>
			<tr>
				<td><label>Description </label></td>
				<td style="width: 300px"><fieldset><span class="green f20"> <?php echo $description ?></span></fieldset> 
				<input type="hidden" name="description" id="description" value="<?php echo $description ?>"></td>
			</tr>
			<tr>
				<td><label>Price </label></td>
				<td>: <span class="green f20"> <?php echo $price ." TK"?></span>
					<input type="hidden" name="price" id="price" value="<?php echo $price ?>">
					<input type="hidden" name="date" id="date" value="<?php echo date('d-M-Y h:i A') ?>">
				</td>
			</tr>
			<tr>
				<td><label>Payment Method</label></td>
				<td>: <select name="payment_method" id="payment_method" onchange="peymentGetway()">
					<option value="">Select</option>
					<option value="BKASH">Bkash</option>
					<option value="NAGAD">Nagad</option>
					<option value="ROCKET">Rocket</option>
				</select>
				<span id="payment_methodErr" class="red">* <?php echo $payment_methodErr ?></span></td>
			</tr>
			<tr>
				<td><span id="getwayLoad"></span></td>
				<td><span id="numberBoxLoad"></span></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><input type="submit" name="confirm" value="CONFIRM" class="btn"></td>
				<td>
					<p style="color:green;"><?php echo $successfulMessage; ?></p>
					<p style="color:red;"><?php echo $errorMessage; ?></p>
				</td>
			</tr>
		</table>
	</form>
	<br><br><br><br><br><br>
 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>