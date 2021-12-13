<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="header"><h2 class="glyphicon glyphicon-cutlery"> Chef's Place</h2></strong></div>
  <p><a href="../view/home-page.php" class="btn btn-warning">Back to Home</a><p>
  <form class="form" action="../control/feedback-control.php" method="post">

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          
          <fieldset>
            <legend class="text-center">Please Give Feedback</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
             <br><br>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
             <br><br>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
             <br><br>
            
            <div class="form-group">
              <div class="col-md-12 text-right">
                <center>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </center>
              </div>
            </div>
            
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
 <?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>