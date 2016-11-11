<?php
	session_start();
	include 'connectdb.php';
	// print_r($_POST);
	// echo $_POST['age'];
	$email=$_SESSION['login_user_session'];
	$prof_name=$_POST['profile_name'];
	$weight=$_POST['Weight'];
	$height=$_POST['height'];
	$age=$_POST['u_age'];
	$t=$_POST['select1'];
	if($_SESSION['admin']==1){
		$sql_query = "SELECT details_check	 FROM admindetails WHERE Email = '$email'";
	}
	else if ($_SESSION['expert']==1){
			$sql_query = "SELECT details_check	 FROM expertdetails WHERE Email = '$email'";
	}
	else{
		$sql_query = "SELECT details_check	 FROM userdetails WHERE Email = '$email'";
	}
	$result = mysqli_query($conn,$sql_query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$option=$row['details_check'];
	print_r($row);
	// $id=$row['ID'];
	// echo $id;
	if($option=='0'){
		echo 'hi';
		if($_SESSION['admin']==1){
			$sql_query="UPDATE admindetails SET details_check='1',ProfileName='$prof_name',Height='$height',Weight='$weight',Age='$age',Type='$t' WHERE Email='$email'";
		}
		else if($_SESSION['expert']==1){
			$sql_query="UPDATE expertdetails SET details_check='1',ProfileName='$prof_name',Height='$height',Weight='$weight',Age='$age',Type='$t' WHERE Email='$email'";
		}
		else{
			$sql_query="UPDATE userdetails SET details_check='1',ProfileName='$prof_name',Height='$height',Weight='$weight',Age='$age',Type='$t' WHERE Email='$email'";
		}
		$result = mysqli_query($conn,$sql_query);
		// header("Location: http://localhost/HT/planmd.php");
		echo 'Updated successfully';
		
	}
	header("Location: http://localhost/HT/planmd.php");
?>