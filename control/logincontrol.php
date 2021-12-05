<?php
	include_once('../model/model.php');
	session_start(); 
	 
	 $error="";
	// store session data
	if (isset($_POST['login'])) 
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$connection = new db();
		$conobj=$connection->OpenCon();

		$userQuery = $connection -> login($conobj,"userinfo",$username,$password);
		$row = mysqli_fetch_array($userQuery);

		if ($userQuery->num_rows > 0) 
		{
			$_SESSION["name"] = $row['name'];
			$_SESSION["username"] = $row['username'];
			$_SESSION["password"] = $row['password'];
			$_SESSION["email"] = $row['email'];
			$_SESSION["type"] = $row['type'];
			$_SESSION["address"] = $row['address'];
			$_SESSION["phone"] = $row['phone'];
			$_SESSION["dob"] = $row['dob'];
			$_SESSION["gender"] = $row['gender'];
			header("location: ../view/home-page.php");

			if(empty($_POST["remember"])) 
            {
                setcookie("username","");
                setcookie("password","");
            } 
            else 
            {
                setcookie ("username",$_POST["username"],time() + 86400);
                setcookie ("password",$_POST["password"],time() + 86400);
            }
		}
		else 
		{
			$error = "Username or Password is invalid";
		}
		$connection->CloseCon($conobj);
	}
	
?>