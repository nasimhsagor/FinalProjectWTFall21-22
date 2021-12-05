<?php include('../control/sessioncontrol.php');
      require_once ('../model/model.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oder Food Items</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>Online Food Ordering System</h2></strong>
    </div>
    <div class="main-body">
      <p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a>
      <p>
      <h1>ORDER DETAILS</h1>

      <?php
        //Db connect";
        $customername = $user;
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowOrderHistory($conn,"orders",$customername);     

        //$conn->query($sql);
        echo "<table border='1'>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Customer Number</th>
            <th>Food Name</th>
            <th>Category</th>
            <th>Amount Paid</th>
            <th>Payment Method</th>
            <th>Status</th>
            <th>Order Date</th>
            <th>Action</th>
        </tr>";

        if($userQuery->num_rows > 0)
        {
          while($row=$userQuery->fetch_assoc())
          { 
            $order = $row['order_id'];
            echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['number']. "</td>";
            echo "<td>" . $row['food_name'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['amount'] ."TK". "</td>";
            echo "<td>" . $row['payment_method']. "</td>";
            echo "<td style='color: cyan'>" . $row['status']. "</td>";
            echo "<td>" . $row['date']. "</td>";
            echo "<td> <a href='../view/user-order-cancel.php?order_id=$order' class='link-hvr'>Cancel</a> </td>";
            echo "</tr>";
          }
          echo "</table>";
          $conn->close();
        }
      ?>
    </div>
    <br><br><br><br><br><br>

    <?php include 'footer.php' ; ?>
</body>

</html>