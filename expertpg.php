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
	height: 100vh;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	}
#msg_box{
	padding-left: 5%;
	background-color: #fff;
	border: 5px solid #26a69a ;
}
</style>
</head>
<body>
<?php
	include 'loggedinnav.php';
?>
<div class="container">
	<h3 class="center-align" style="color: #FFF;">INBOX</h3>
	<div class="row valign-wrapper" id="msg_box">
		<?php 
			session_start();
			if(!isset($_SESSION['expert']))
			{
				die("You dont have rights to access this page");
			}
			include './php/connectdb.php';
			$email = $_SESSION['login_user_session'];
			$sql_query = "SELECT mail_cnt   FROM expertdetails WHERE Email = '$email'";
			$result = mysqli_query($conn,$sql_query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
			$cnt=$row['mail_cnt'];
			echo '<p><i class="medium material-icons">email</i><center><span style="valign">You have &nbsp<b style="font-size:20px;">';
			echo $cnt;
			echo '</b>&nbsp&nbsp new message</span></center><p>';
		?>
	</div>
</div>	



<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script src="js/dbdata.js"></script>
<script src="js/expertpg.js"></script>
<script type="text/javascript" src="js/login_db_select.js"></script>
</body>
</body>
</html>