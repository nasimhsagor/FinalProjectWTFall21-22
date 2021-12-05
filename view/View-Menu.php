<?php 
    include('../control/sessioncontrol.php');
    require_once ('../model/model.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Item</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>Online Food Ordering System</h2></strong>
    </div>
    <div class="main-body">
      <p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a>
      <p>
      <h1>FOOD ITEM LIST</h1>
      <p> Click here to <a href="../view/Add-food-item.php" class="link-hvr">Add-Food-item</a></p>

      <?php
        //Db connect";
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowItem($conn,"foodlist");     

        //$conn->query($sql);
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Food Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>";

        if($userQuery->num_rows > 0)
        {
          while($row=$userQuery->fetch_assoc())
          { $id = $row['id'];
            $img = $row['image'];
            $food_id = $row['id'];
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['foodname'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price']."TK". "</td>";
            echo "<td> <img src='../resources/food_img/$img' width='150'></td>";
            echo "<td> <a href='../view/update-food-item.php?food_id=$food_id' class='link-hvr'>Edit</a> <br> <a href='../control/delete-foodControl.php?food_id=$id' class='link-hvr'>Delete</a> </td>";
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