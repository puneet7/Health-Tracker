<!DOCTYPE html>
<html>
<head>
	<title>Health-Tracker</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style>
		body{
			background-image: url('./img/exercise.jpg');
		}
	</style>

</head>
<body>
	<?php
		include 'loggedinnav.php';
	?>


			  <div class="container">
			  	<div class="row" id="form_box">
			  		<h3 class="center-align">Exercise Links</h3>
			  		<!-- Dropdown Trigger -->
			  		  <center><a class='dropdown-button btn center' href='#' data-activates='dropdown1'>Links!</a></center>

			  		  <!-- Dropdown Structure -->
			  				  <ul id='dropdown1' class='dropdown-content'>
			  				    <li><a href="https://www.youtube.com/watch?v=NECcLiefy0M">Push Ups</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=Vy9WKyN1rig">Tabata</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=QKKZ9AGYTi4">Squat</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=Xyd_fa5zoEU">Crunches</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=1fbU_MkV7NE">Sit Ups</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=oiT-oZOrTs0">Ab Exercises</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=U4BS9EXvfyg">BenchPress</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=eozdVDA78K0">Dumbbell Fly</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=eGo4IYlbE5g">Pull Up</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=2-LAMcpzODU">Push Down</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=JB2oyawG9KI">Leg Raise</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=ph3pddpKzzw">Back Extension</a></li>
			  				    <li><a href="https://www.youtube.com/watch?v=wkD8rjkodUI">Russian Twist</a></li>


			  				    <li class="divider"></li>
			  				    <li><a href="#!">three</a></li>
			  				  </ul>
			  	</div>
			  </div>	
			  

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/init.js"></script>
	        
</body>
</html>