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
	<div class="header">
        <h2>Chef's Place</h2></strong>
    </div>
	<!--================ Reservation Area =================-->
		<section class="reservation-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-9 col-md-10">
						<form class="booking-form"  action="booking.php" method="POST">
							<h1 align="center">Book For Event</h1>
							<div class="row">
								<div class="col-lg-12 d-flex flex-column mb-20">
									<input name="name" id="name" placeholder="Event Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
									 class="form-control" required="" type="text">
								</div>
	
								<div class="input-group col-lg-6 mb-20">
									<input id="date" name="date" class="form-control datepicker" placeholder="Event Date" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Event Date'" class="form-control" required="" type="text">
									<span class="input-group-append">
										<button class="btn btn-outline-secondary border-left-0 border-0" type="button">
											<i class="fa fa-calendar reservation-calendar"></i>
										</button>
									</span>
								</div>
	
								<div class="col-lg-6 d-flex flex-column mb-20">
									<div class="nice-select app-select form-control " tabindex="0">
											<input id="time" name="time" placeholder="Event Time" onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Event Time'" class="form-control" required="" type="text">
									</div>
								</div>
	
								<div class="col-lg-6 d-flex flex-column mb-20">
									<div class="nice-select app-select form-control " tabindex="0">
											<input id="guest" name="guest"  placeholder="Event Guest" onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Event Guest'" class="form-control" required="" type="text">
									</div>
								</div>
								<div class="col-lg-6 d-flex flex-column mb-20">
									<input name="budget" id="budget" placeholder="Budget" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Total Budget'"
									 class="form-control" required="" type="text">
								</div>
								<div class="col-lg-12 d-flex flex-column mb-20">
									<input name="c_name" id="c_name" placeholder="Contact Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
									 class="form-control" required="" type="text">
								</div>
								<div class="col-lg-12 d-flex flex-column mb-20">
									<input name="email" id="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
									 class="form-control" required="" type="email">
								</div>
								<div class="col-lg-12 d-flex flex-column mb-20">
									<input name="phone" id="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
									 class="form-control" required="" type="text">
								</div>
								<div class="col-lg-12 d-flex flex-column">
									<textarea class="form-control"  id="msg" name="msg" placeholder="Post a message" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Post a message'" required=""></textarea>
								</div>
	
								<div class="col-lg-12 d-flex justify-content-end" >
									<button class="primary-btn dark mt-30 text-uppercase" name="booking" >Send Request</button>
								</div>
								<!-- <button type="submit" class="btn btn-primary" name="register">Submit</button> -->
								<div class="alert-msg"></div>
							</div>
						</form>
					</div>
	
					
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<center>
<?php include 'footer.php' ; ?>
</center>
</body>
</html>