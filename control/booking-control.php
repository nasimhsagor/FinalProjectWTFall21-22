<?php 
 include "header.php";
 require_once '../model/model.php';

	if($_SERVER['REQUEST_METHOD'] === "POST") 
	{
		$eventname = $_POST['eventname'];
		$totalperson = $_POST['totalperson']; 
		$eventphone = $_POST['eventphone']; 
		$eventdate = $_POST['eventdate']; 
		$message = $_POST['message'];

		if(!empty($_POST['eventname']) || !empty($_POST['totalperson']) || !empty($_POST['eventphone']) || !empty($_POST['eventdate']) || !empty($_POST['message']))
		{
			$connection = new db();
			$conn=$connection->OpenCon();    
			$userQuery=$connection->BookingInsert($conn,"bookinginfo",$eventname,$totalperson,$eventphone,$eventdate,$message);
			
			$flag=1;
			if($userQuery != null)
			{
					$successfulMessage = "Thanks for your reservation. We will contact ASAP";
					echo $successfulMessage;
					header("Location: http://localhost/view/done-booking.php");
			}
			else
			{ 
				$errorMessage = "error occurred"; 
				echo $errorMessage;
			}
			$conn->close();
		}
	}
?>