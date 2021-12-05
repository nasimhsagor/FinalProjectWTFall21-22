<?php
$connect = mysqli_connect("localhost", "root", "", "project_database");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM foodlist
	WHERE foodname LIKE '%".$search."%'";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
			<tr>
            <th>ID</th>
            <th>Food Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .='
			<tr>
				<td>'.$row['id'].'</td>
				<td>'.$row['foodname'].'</td>
				<td>'.$row['category'].'</td>
				<td>'.$row['description'].'</td>
				<td>'.$row['price'].'</td>
				<td>'.$row['image'].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
}



?>