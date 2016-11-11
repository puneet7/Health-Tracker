<!DOCTYPE html>
<html>
<head>
	<title>Health-Tracker</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Health-Tracker</title>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style type="text/css">
		body{
			background-image: url('./img/Fitfood.jpg');
			height: 100vh;
			/*background-image: url('./img/fit.jpg'); */
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#form_box{
			padding-bottom: 3%;
			background-color: #fff;
			border: 5px solid #26a69a ;
		}
		h3{
			color: #26a69a ;
		}
	</style>
</head>
<body>

<?php
include 'loggedinnav.php';
session_start();
if(!isset($_SESSION['login_user_session'])){
	   header("Location: http://localhost/HT/php/not_loggedin.php");
    }
include './php/connectdb.php';
$email=$_SESSION['login_user_session'];
if(isset($_SESSION['admin'])){
	$sql_query = "SELECT details_check	 FROM admindetails WHERE Email = '$email'";
}
else if(isset($_SESSION['expert'])){
	$sql_query = "SELECT details_check	 FROM expertdetails WHERE Email = '$email'";
}
else{
	$sql_query = "SELECT details_check	 FROM userdetails WHERE Email = '$email'";
	}
	$result = mysqli_query($conn,$sql_query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$option=$row['details_check'];
	if ($option==1){
		header("Location: http://localhost/HT/planmd.php");
}

?>

	<div class="container">
		<div class="row" id="form_box">
			<h3 class="center-align">User Details</h3>
			<form class="col s12" action='php/xyz.php' method='post'>
			  <div class="input-field col s12">
			    <input id="profile_name" type="text" class="validate" name='profile_name'>
			    <label for="profile_name">Profile name</label>
			  </div>
			  <div class="input-field col s12 m6">
			    <input id="height" type="text" class="validate" name='height'>
			    <label for="height">Height</label>
			  </div>
			  <div class="input-field col s12 m6">
			    <input id="Weight" type="text" class="validate" name='Weight'>
			    <label for="weight">Weight</label>
			  </div>
			  <div class="input-field col s12 m6">
			    <input id="u_age" type="text" class="validate" name='u_age'>
			    <label for="u_age">Age</label>
			  </div>
			  <div class="input-field col s12 m6">
	            <select id='select1' name='select1'>
	              <option value="V" selected>Veg</option>
	              <option value="NV">Non-veg</option>
	            </select>
	            <label>Your Preference </label>
	          </div>
			  <center><button  style="margin-top: 2%" id="" class = "hide-on-small-only btn teal waves-effect waves-light">Submit</button></center>
			  <button  style="margin-top: 2%" id="" class = "right hide-on-med-and-up btn teal waves-effect waves-light">Submit</buttton>
			</form>
		</div>
	</div>	
	


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript" src="js/login_db_select.js"></script>
</body>
</html>