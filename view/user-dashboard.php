<!DOCTYPE html>
<html lang="en">
<body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center>

<div class="sidebar">
  <a href="../view/view-menu-for-order.php" class="btn c1">&nbsp; Order Food &nbsp;</a>
  <a href="../view/view-customer-order-history.php" class="btn c1">&nbsp;Order History &nbsp;&nbsp;&nbsp;&nbsp;</a>
  <a href="../view/profile.php" class="btn c1">&nbsp;View Profile &nbsp;</a>
  <a href="../view/update-profile.php" class="btn c1">Update Profile</a>
  <a href="../view/changepassword.php" class="btn c1">Change Password</a>
  <a href="../view/booking.php"class="btn c1">Booking</a>
  <a href="#contact"class="btn c1">Feedback</a>
  <a href="../view/contact.php"class="btn c1">Contact</a>
  <a href="../view/about.php"class="btn c1">About</a>
  <a href="../view/search.php"class="btn c1">Search</a>
</div>
</center>
<br>
<div class="container">
  <center>
  <h2>Foods</h2> 
  </center> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <center>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../resources/images/1.jpg" alt="Los Angeles" style="width:30%;">
      </div>

      <div class="item">
        <img src="../resources/images/2.jpg" alt="Chicago" style="width:30%;">
      </div>
    
      <div class="item">
        <img src="../resources/images/3.jpg" alt="New york" style="width:30%;">
      </div>
    </div>

    </center>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>    