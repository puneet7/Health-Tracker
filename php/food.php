<?php
	session_start();
	include 'connectdb.php';
	$food_admin=$_POST['food_name'];
	$cal=$_POST['food_cal'];
	$sql_query="INSERT INTO `food` (`ID`, `name`, `calories`) VALUES (NULL, '$food_admin', '$cal')";
	$result = mysqli_query($conn,$sql_query);
	echo 'Added Successfully';
	if ($result){
		// header("Location: http://localhost/HT/admin.php");
		header( "Refresh:3; url=http://localhost/HT/admin.php", true, 303);
	}
		
	// $foodName = htmlentities($_POST['name_food']);
	// $password = htmlentities($_POST['cal_food']);
	// $sql_query="INSERT INTO `food` (`ID`, `name`, `calories`) VALUES (NULL, '$food_admin', '$cal')";
	// $result = mysqli_query($conn,$sql_query);
	// if($result == 1)
	// {
	//    echo '<span style = "color:green">Updated Successfully</span>';
	// }
	  

	 
?>