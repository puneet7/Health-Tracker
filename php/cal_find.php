<?php

	include 'connectdb.php';
	$food_name = htmlentities($_POST['name_food']);
	$sql_query = "SELECT calories FROM food WHERE name = '$food_name'";
	$result = mysqli_query($conn,$sql_query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(isset($row)){

		print_r($row['calories']);
	}
	else{
		echo '<span style = "color:red;">Food not in database</span>';
	}


?>