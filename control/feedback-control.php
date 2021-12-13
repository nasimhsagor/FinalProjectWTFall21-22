<?php 
 include "header.php";
 require_once '../model/model.php';

	if($_SERVER['REQUEST_METHOD'] === "POST") 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['message']))
		{
			$connection = new db();
			$conn=$connection->OpenCon();    
			$userQuery=$connection->FeedbackInsert($conn,"feedback",$name,$email,$message);
			
			$flag=1;
			if($userQuery != null)
			{
					$successfulMessage = "Thanks for your valuable Feedback :)";
					echo $successfulMessage;
					header("Location: http://localhost/view/done-feedback.php");
			}
			else
			{ 
				$errorMessage = "opss error occurred -_-"; 
				echo $errorMessage;
			}
			$conn->close();
		}

	}
?>