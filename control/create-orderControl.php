<?php 
 include "header.php";
 require_once '../model/model.php';
	$successfulMessage = $errorMessage = $payment_methodErr = $phoneErr = "";

		$id= $_GET['food_id'];
		$connection = new db();
		$conn=$connection->OpenCon();     
		$Query=$connection->viewFoodProfile($conn,"foodlist",$id);
	
		if($Query->num_rows > 0)
		{
			while($row=$Query->fetch_assoc())
			{
				$foodname = $row['foodname'];
				$category = $row['category'];
				$description = $row['description'];
				$price = $row['price'];
				$image = $row['image'];
			}
		} 
		if(isset($_POST['confirm']))
		{
			if(empty($_POST['payment_method']))
	        {
	            $payment_methodErr = " Please select a Payment Method";
	        }
	        if(empty($_POST['number']))
	        {
	            $phoneErr = " Please type your Phone Number";
	        }
	        else
	        {
				$order_id = (time()* 36025);
				$username = $_POST['username'];
				$food_id = $_POST['food_id'];
				$food_name = $_POST['foodname']; 
				$category = $_POST['category']; 
				$amount = $_POST['price']; 
				$payment_method = $_POST['payment_method'];
				$number = $_POST['number'];
				$status = "New Order Placed";
				$date = $_POST['date'];

				$userQuery=$connection->CreateOrder($conn,"orders",$order_id,$username,$food_id, $food_name,$category,$amount,$payment_method,$number,$status,$date);
				$flag=1;
				if($flag==1)
				{
					$successfulMessage = "ORDER PLACED SUCCESFULLY , <br>see order <a href='../view/view-customer-order-history.php'>History</a>";
				}
				else
				{ 
					$errorMessage = "error occurred"; 
				}
				$conn->close();
	        }
		
		}

		

		
		
		
	
?>