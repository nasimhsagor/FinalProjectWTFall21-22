<?php 
    include "header.php";
    require_once ('../model/model.php');

	session_start();
	$username ="";
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
        $conn->close();
    }
?>