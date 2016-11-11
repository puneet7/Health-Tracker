<?php
	session_start();
	include 'connectdb.php';
	$email = $_SESSION['login_user_session'];
	//reset mail count
	$sql_query="UPDATE expertdetails SET mail_cnt='0' WHERE Email='$email'";
	$result = mysqli_query($conn,$sql_query);
?>