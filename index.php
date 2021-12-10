<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="home-header">
		<strong><span class="glyphicon glyphicon-cutlery"> Chef's Place</strong>
	</div>
	<br><br><br><br>
	<center>
			<div><a href="view/home-page.php" class="btn login-btn">
					<?php
						if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
						else
						{
							echo "Login";
						}
					?>
				</a>
			</div>
			<br>
			<div><a href="view/registration-form.php" class="btn"> Registration
			</a>
			</div>
		<br><br>
		<tr>
			<td><img src="resources/images/1.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/images/2.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/images/3.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/images/4.jpg" alt="Food" width="280px"></td>
		</tr>
	</center>
 <?php include 'view/footer.php' ; ?>

</body>
</html>