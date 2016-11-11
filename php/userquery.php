<?php
	session_start();
	include 'connectdb.php';
	//getting mail count
	$email = $_POST['selectexpert'];
	$sql_query = "SELECT mail_cnt   FROM expertdetails WHERE Email = '$email'";
	$result = mysqli_query($conn,$sql_query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$cnt=$row['mail_cnt'];
	$cnt = $cnt + 1;
	//update mail count
	$sql_query="UPDATE expertdetails SET mail_cnt='$cnt' WHERE Email='$email'";
	$result = mysqli_query($conn,$sql_query);

	//send mail
	$to      = $_POST['selectexpert'];
	$subject = "HT User Query";
	$message = $_POST['query_box'];
	$headers = "From: {$_SESSION['login_user_session']}";

	@mail($to, $subject, $message, $headers);
	header("Refresh:3; url=http://localhost/HT/talktoexpert.php", true, 303);
?>