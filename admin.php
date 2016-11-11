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
<style>
body{
	background-image: url('./img/admin_page.jpg');
	}
#form_box{
	padding-bottom: 3%;
	background-color: #fff;
	border: 5px solid #26a69a ;
}
</style>
</head>
<body>
<?php
	include 'loggedinnav.php';
	session_start();
	if(!isset($_SESSION['admin']))
	{
		die("You dont have rights to access this page");
	}
	
?>
<div class="container">
	<h3 class="center-align">Enter Food Details</h3>
	<div class="row" id="form_box">
		<form class="col s12" action='php/food.php' method='post'>
		  <div class="input-field col s6">
		    <input id="food_name" type="text" class="validate" name='food_name'>
		    <label for="food_name">Food Name</label>
		  </div>  
		   <div class="input-field col s6 ">
		      <input id="food_cal" type="text" class="validate" name='food_cal'>
		      <label for="food_cal">Calories</label>
		    </div>
		  <center><button  style="margin-top: 2%" id="" class = "hide-on-small-only btn teal waves-effect waves-light">Submit</button></center>
		  <button  style="margin-top: 2%" id="" class = "right hide-on-med-and-up btn teal waves-effect waves-light">Submit</buttton>
		</form>
	</div>
	<div id='showResult'>
	</div>
</div>	



<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script src="js/dbdata.js"></script>
<script type="text/javascript" src="js/login_db_select.js"></script>
</body>
</body>
</html>