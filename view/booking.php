<?php include('../control/sessioncontrol.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
      <form method="post" action="../control/booking-control.php">
 <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" name="eventname" placeholder="Event Name">
    </div>    
 </div>
 <br>
  <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" name="totalperson" placeholder="Total Person">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="number" class="form-control" name="eventphone" placeholder="Phone">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="date" class="form-control" name="eventdate">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" name="message" placeholder="Message">
    </div>    
 </div>
 <div>
 	<input type="submit" name="submit" class="btn btn-danger" value="SUBMIT">
 </div>

<center>
<?php include 'footer.php' ; ?>
</center>
</body>
</html>