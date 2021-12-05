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
            $username = $row['username'];
            $password = $row['password'];
        }
    }
    if(isset($_POST['submit']))
    {
        $update_password = $_POST['newpassword'];
 
        $userQuery2=$connection->UpdatePassword($conn,"userinfo",$update_password,$username);
            $flag=1;
            if($flag==1)
            {
                $successfulMessage = "Password Updated "; 
            }
            else
            { 
                $errorMessage = "error occurred while updating"; 
            }
            $conn->close();
    }
?>