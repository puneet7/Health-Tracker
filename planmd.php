<?php session_start(); 
if(!isset($_SESSION['login_user_session'])){
  die("Not logged in");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Health Tracker</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">


  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script>
  <script type="text/javascript" src='./js/Chart.js'></script>
  <style type="text/css">
      a:hover{
          color: #1976d2;
      }
      #tmp, #pmd, #upd_entries{
        padding-top: 64px!important;
        margin-top: -64px!important;
      }
  </style>
</head>

<body>

<div class = "navbar-fixed"> 
  <nav class="w3-sidenav  teal waves-lime hide-on-small-only" style="width:25%;z-index:-1;">
      <br>
      <center><h2 style="color:white;">WELCOME</h2></center>
      <a href="#tmp" class="smoothScroll waves-effect waves-teal">Track My progress</a>
      <a href="#upd_entries" class="smoothScroll waves-effect waves-teal">Update Entries</a>
      <a href="#pmd" class="smoothScroll waves-effect waves-teal">Plan Diet</a>
      <a href="http://localhost/HT/exercise_suggest.php" class="waves-effect waves-teal">Exercise Links</a>
  </nav>
  <nav>
    <?php
      include 'loggedinnav.php';
    ?>
  </nav>

</div>

<!-- Dropdown Structure -->
<ul id="logout-dropdown" class="dropdown-content">
  <li><a href="javascript:void(0);" class="waves-effect waves-lime">Logout</a></li>
</ul>



<div id = "tmp" class="container" style="padding-left: 27%;">
  <div>
    <h2 class="center-align teal-text text-darken-1">Track my Progress</h2>

    <div>
        <section>
            <article>
                <canvas id="myChart" width="800" height="400">
                </canvas>
            </article>
        </section>
    </div>
   <center><button class = "btn teal" onclick="check_progress()" id="track_prog">Track My Progress</button></center>
  </div>


     <br><br>
      <div id = "upd_entries">
        <h2 class="center-align teal-text text-darken-1">Update Entries</h2>
        <div class="row" >

          <p class="left-align teal-text text-darken-1"><b>What did you eat?</b></p>
          <div class="input-field">
            <input id="food_field" type="text" class="validate">
            <label for="food_field">Food here</label>
          </div><br/>
          <center><button class = "btn teal waves-effect waves-light" onclick = "submit_food_intake()">Submit</button></center>
          <div id = "food_error"></div><br/>

          <p class="left-align teal-text text-darken-1"><b>Enter details by Calories:</b></p>
          <div class="input-field">
            <input id="food_cal_field" type="text" class="validate" >
            <label for="food_weight_field" id = "users">Approx. Calories</label>
          </div>
          <center><button class = "btn teal waves-effect waves-light" onclick = "submit_cal_intake(0)">Submit</button></center>
          <div id = "cal_error"></div><br/>          

          <p class="left-align teal-text text-darken-1"><b>Log your activties:</b></p>
          <div class="input-field col s6">
            <select id ="ex_activity">
              <option value="0" disabled selected>Choose Excerise</option>
              <option value="1">Running</option>
              <option value="2">Jogging</option>
              <option value="3">Swimming</option>
              <option value="4">Cycling</option>
              <option value="5">Walking</option>
            </select>
            <label>Excerise</label>
          </div>
          <div class="input-field col s6">
            <input id="ex_time" type="text" class="validate">
            <label for="ex_time">Time (mins)</label>
          </div>
          <div id = "time_error"></div>
        </div>
        <center><button class = "btn teal waves-effect waves-light" onclick = "log_ex_activity()">Submit</button></center>
        
      </div>

      <br><br>

      <div id = "pmd">
        <h2 class="center-align teal-text text-darken-1">Plan Diet</h2><br>
        <center>Enter Goal:<input type="text" id = "diet_goal"></center>
        <center><button class = "btn teal waves-effect waves-light" id = "gen_diet" onclick = "generateDiet()">Generate diet</button></center><br/><br/>
        <div id = "no_goals"></div>
        <center><b>Breakfast:</b></center><br>
        <div id = "bdiet"></div>
        <center><b>Lunch:</b></center><br>
        <div id = "ldiet"></div>
        <center><b>Snacks:</b></center><br>
        <div id = "sdiet"></div>
        <center><b>Dinner:</b></center><br>
        <div id = "ddiet"></div>
      </div>
  </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/dbdata.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src = "./js/graphdata.js"></script>
    <script type="text/javascript" src = "./js/pmd.js"></script>
  </body>