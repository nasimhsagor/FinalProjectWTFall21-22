<?php include('../control/sessioncontrol.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
	<div class="header"><h2 class="glyphicon glyphicon-cutlery">  Chef's Place</h2></strong></div>
	<a href="../view/home-page.php" class="btn btn-warning">Home</a>
    	<center>
    		<div>
     <h3 style="color:#D2691E;">Make a reservation</h3>
    </div>
    <br>
 <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" id="eventname" placeholder="Event Name">
    </div>    
 </div>
 <br>
  <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" id="totalperson" placeholder="Total Person">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="number" class="form-control" id="eventphone" placeholder="Phone">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="date" class="form-control" id="eventdate">
    </div>    
 </div>

<center>
<?php include 'footer.php' ; ?>
</center>
</body>
</html>