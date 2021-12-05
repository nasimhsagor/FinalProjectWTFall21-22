<?php 
    include "header.php";
	session_start();
	$user ="";
    $type ="";
	if(isset($_SESSION['name']))
    {
        $user = $_SESSION['name'];
    } 
    if(isset($_SESSION['type']))
    {
        $type = $_SESSION['type'];
    }
    else
    {
        header("location: ../view/login-form.php");
    }

 
?>