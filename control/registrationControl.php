<?php 
 include "header.php";
 require_once '../model/model.php';
	$name = $username = $password = $Cpassword  = $email = $address = $phone = $type = $dob = $gender = $image = "";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") 
	{
		$name = $_POST['name'];
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$email = $_POST['email']; 
		$address = $_POST['address']; 
		$phone = $_POST['phone'];
		$type = $_POST['type'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$image = $_FILES["image"]["name"];

		$target_dir = "../resources/user_img/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
			
		if(!empty($_POST['name']) || !empty($_POST['username']) || !empty($_POST['password']) || !empty($_POST['email']) || !empty($_POST['address']) || !empty($_POST['phone']) || !empty($_POST['type']) || !empty($_POST['dob']))
		{
			$connection = new db();
			$conn=$connection->OpenCon();    
			$userQuery=$connection->Register($conn,"userinfo",$name,$username,$password,$email,$address,$phone,$type,$dob,$gender,$image);
			$flag=1;
			if($flag==1)
			{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
				{
					$successfulMessage = "New Record inserted"; 
				} 
			}
			else
			{ 
				$errorMessage = "error occurred"; 
			}
			$conn->close();
		}
	}
?>