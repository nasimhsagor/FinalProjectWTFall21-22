<?php 
    include "header.php";
    require_once ('../model/model.php');

	session_start();
	$username ="";
	$successfulMessage = $errorMessage = "";
	if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
    } 
    else
    {
        header("location: ../view/login-form.php");
    }

    $connection = new db();
    $conn=$connection->OpenCon();    
    $userQuery=$connection->viewProfile($conn,"userinfo",$username);

    if($userQuery->num_rows > 0)
    {
        while($row=$userQuery->fetch_assoc())
        {
            $name = $row['name'];
            $email = $row['email'];
            $username = $row['username'];
            $password = $row['password'];
            $address = $row['address'];
            $phone = $row['phone'];
            $type = $row['type'];
            $gender = $row['gender'];
            $dob = $row['dob'];
            $image = $row['image'];
        }
    }

    if(isset($_POST['submit']))
    {
        $update_name = $_POST['name'];
        $update_username = $_POST['username'];
        $update_email = $_POST['email'];
        $update_address = $_POST['address'];
        $update_phone = $_POST['phone'];
        $update_dob = $_POST['dob'];
        $update_gender = $_POST['gender'];

        $userQuery2=$connection->UpdateProfile($conn,"userinfo",$update_name, $update_username, $update_email, $update_address, 
                                               $update_phone, $update_dob, $update_gender);
			$flag=1;
			if($flag==1)
			{
                header('location: ../view/profile.php');
				$successfulMessage = "User Data Updated | Refresh this page to see Updated Data <button onload='Reload()'>Reload</button>"; 
			}
			else
			{ 
				$errorMessage = "error occurred while updating"; 
			}
			$conn->close();
    }
?>