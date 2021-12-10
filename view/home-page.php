<?php include('../control/sessioncontrol.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2><span class="glyphicon glyphicon-cutlery">  Chef's Place</h2></strong> 

<div class="topnav-right">
<span class="topnav-log-identity">Welcome, <a href="../view/profile.php"><?php echo $user; ?></a></span>
        <span class="btn btn-warning"><a href="../control/logout.php">Logout</a></span> 
    </div>

	</div>
	<br>
	<?php include('../view/user-dashboard.php'); ?>
	
	<?php include '../view/footer.php' ; ?>

</body>
</html>