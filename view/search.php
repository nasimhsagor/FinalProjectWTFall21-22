<?php include('../control/sessioncontrol.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search</title>
		<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<script src="https://use.fontawesome.com/0f09624171.js"></script>
	</head>
	<body>
	<div class="header"><h2 class="glyphicon glyphicon-cutlery"> Chef's Place</h2></strong></div>
	<p><a href="../view/home-page.php" class="btn btn-warning">Back to Home</a><p>
		<div class="container">
			<br />
			<br />
			<div class="form-group">
				<div class="input-group">

					<span class="input-group-addon"><i class="fa fa-search"></i> Search</span>

					<input type="text" name="search_text" id="search_text" placeholder="Search by Food Name" class="form-control" />
					
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
<center>
<?php include 'footer.php' ; ?>
</center>
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../control/search-control.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>