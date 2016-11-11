<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Health-Tracker</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>

<body>
  
<?php
//if User is a guest use this:
    session_start();
    if(isset($_SESSION['login_user_session'])){
     include 'loggedinnav.php';
    }
  else{
//if user is logged in use this:
    include 'guestnav.php';
  } 
?>

  <header class="salad-cover wow fadeIn" id = "top_page"></header>

  <!-- What we do Section -->
  <div class="container">

      <div class="section" id  ="home_sec">   
         <center><h1 class = "header center teal-text text-darken-1 wow bounceInLeft">What We Do</h1></center>
         <center class = "wow bounceInRight">We believe — and medical studies prove — that the best way to lose weight and keep it off is to simply keep track of the foods you eat. Gimmicky machines and fad diets don't work, so we designed a free website that makes calorie counting and food tracking easy. We also provide you with a diet to ensure you keep track of your calories.</center><br>
      </div>
      <br><br>

      <div class = "row wow bounceInUp">
          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp" id = "what-we-do-cards" data-wow-delay="0.5s">
            <i class="icon-cloud medium-icon"></i>
              <h5 class = "header teal-text text-darken-1 center">Plan Your Diet</h5>
              <hr>
              <p>Get a flexible diet to make sure that you don't exceed your daily target limits. Don't like the diet? Don't worry, generate a new one!</p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp" id = "what-we-do-cards" data-wow-delay="0.8s">
            <i class="icon-mobile medium-icon"></i>
              <h5 class = "header teal-text text-darken-1 center">Track Progress</h5>
              <hr>
              <p>Get a graphical representation of the calories that you have eaten and the calories that you have burned of the last 30 entries. </p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp" id = "what-we-do-cards"  data-wow-delay="1.1s">
            <i class="icon-laptop medium-icon"></i>
              <h5 class = "header teal-text text-darken-1 center">Calculate BMI</h5>
              <hr>
              <p>Easy to use BMI calculator, no need to create an account either.</p>
          </div>
      </div>

      <br>

      <div class = "row wow bounceInUp">
          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp"  id = "what-we-do-cards" data-wow-delay="1.1s">
            <i class="icon-compass medium-icon"></i>
              <h5 class = "header teal-text text-darken-1 center">Link Exercises</h5>
              <hr>
              <p>We'll provide you links to different exercise tutorials/videos on youtube to ensure that you always stay fit. </p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp"  id = "what-we-do-cards" data-wow-delay="0.8s">
            <i class="icon-chat medium-icon"></i>
              <h5 class = "header teal-text text-darken-1 center">Food Info</h5>
              <hr>
              <p>Get the calorie information about various foods stored in our database. </p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp"  id = "what-we-do-cards" data-wow-delay="0.5s">
            <i class="icon-browser medium-icon"></i>
              <h5 class = "header teal-text text-darken-1 center">Contact Dietitians</h5>
              <hr>
              <p>We provide you a platform where you can contact other dieticians/experts who are certainly willing to help you out.</p>
          </div>
      </div>

  </div>

  <div class = "divider"></div>

  <!-- Plan My Diet Section -->
  <div class="container">
      <div class="section" id = "sec_planmydiet">   
          <center><h1 class = "header center teal-text text-darken-1 wow fadeInUp" data-wow-delay = "0.3s">Plan My Diet</h1></center>

          <div class = "col s12 m12 l4 wow fadeInUp" data-wow-delay = "0.3s">
              <center><img class = "card-panel hoverable responsive-img" width="300" height="300" src="./img/dietplan.jpg"></center>
          </div>

          <div class = "row">
              <div class = "col s12 m12 l12 plan_diet wow fadeInUp" data-wow-delay = "0.3s">
                  This month's diet is next month's body! Our priority is providing you with distinct variants of flexible diets. You can generate different diets on the go and we'll make sure that you don't exceed the calorie limits you set. We'll take care of your Vegetarian/Non-Vegetarian preference and then your diet will be generated. 
                  <br>
                  <blockquote>
                    ~ Failing to plan is planning to fail
                  </blockquote>
                  <br><br>
                  <center><a href = "http://localhost/HT/get_details.php"  class = "btn lime waves-effect waves-teal">Start Planning</a></center>
              </div>
          </div>
      </div>
      <br><br>
  </div>
  
  <div class = "divider"></div>
  
  <!--BMI Calculator section-->
  <div id="sec_BMI" class="container">    
      <div class="section hide-on-small-only"><!-- for med& large screen -->
        <div class="row">
          <div id="BMI-calc-card" class="col s12 m7">
            <div class="card lime">
              <div class="card-content white-text">
                <h4>BMI Calculator</h4>
                <div class="row">
                        <div id="BMI-weight" class="input-field col s12 label-color">
                          <input id="My_weight" type="text" >
                          <label for="My_weight">Weight (in kg)</label>
                        </div>
                        <div id="BMI-height" class="input-field col s12 label-color">
                          <input id="My_height" type="text" onkeypress="if (event.keyCode==13) document.getElementById('BMI-btn').click();" >
                          <label for="My_height">Height (in cm)</label>
                        </div>
                        <br>
                        <div class="col s8"></div>
                        <button id="BMI-btn" class="btn deep-lime lighten-1 waves-effect waves-teal col s4" onclick="BMI_calculator()">Calculate</button>
                        <div id="BMI-result" class="input-field col s12 label-color">
                          <input id="My_BMI" type="text">
                          <label for="My_BMI">Body Mass Index</label>
                        </div>
                        <div class="input-field col s12 label-color">
                          <input id="BMI_response" type="text">
                          <label for="BMI_response">Comment</label>
                        </div>
                </div>
              </div>
            </div>
          </div>
          <div id="BMI-desc" class="col s12 m12">
            <center>
              <h1 id="BMI_header" class = "header center teal-text text-darken-1 wow fadeInUp" data-wow-delay="0.6s">BMI Calculator</h1>
              <p id="p-BMI" class = "wow fadeInDown">Find your Body Mass Index (BMI) and get to know the classification of obesity.</p><br>
              <button id="btn-show-calc" class="btn lime waves-effect waves-teal" onclick="openCalc()">Calculate BMI</button>
            </center>
          </div>
        </div>
      </div>

      <div class="section hide-on-med-and-up"><!-- for small screen -->
        <div class="row">
          <div id="BMI-desc-sm" class="col s12 m12">
            <center>
              <h1 id="BMI_header-sm" class = "header center teal-text text-darken-1 wow fadeInUp" data-wow-delay="0.6s">BMI Calculator</h1>
              <p id="p-BMI-sm" class = "wow fadeInDown">Find your Body Mass Index (BMI) and get to know the classification of obesity.</p><br>
              <button id="btn-show-calc-sm" class="btn lime waves-effect waves-teal" onclick="openCalcS()">Calculate BMI</button>
            </center>
          </div>
          <div id="BMI-calc-card-sm" class="col s12 m7">
            <div class="card lime">
              <div class="card-content white-text">
                <div class="row">
                        <div id="BMI-field" class="input-field label-color col s12">
                          <input id="My_weight-sm" type="text">
                          <label for="My_weight-sm">Weight (in kg)</label>
                        </div>
                        <div id="BMI-field" class="input-field  label-color col s12">
                          <input id="My_height-sm" type="text" onkeypress="if (event.keyCode==13) document.getElementById('BMI-btn-sm').click();">
                          <label for="My_height-sm">Height (in cm)</label>
                        </div>
                        <br>
                        <div class="col s7"></div>
                        <button class="btn deep-lime lighten-1 waves-effect waves-teal col s5" id = "BMI-btn-sm" onclick="BMI_calculatorS()">Calculate</button>
                        <div id="BMI-field" class="input-field label-color col s12">
                          <input id="My_BMI-sm" type="text">
                          <label for="My_BMI-sm">Body Mass Index</label>
                        </div>
                        <div class="input-field col s12 label-color">
                          <input id="BMI_response-sm" type="text">
                          <label for="BMI_response-sm">Comment</label>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

<!--Calorie counter section-->
  <div class="container">
    <div id="calorie-desc" class="s12 m12 ">
      <center>
        <h1 id="calorie_header" class = "header center teal-text text-darken-1 wow fadeInUp" data-wow-delay="0.6s">Calorie Finder</h1>
      </center>
    </div>
     <div class="row">
        <div class="s12" id="cal_find">
          <div class="col m2"></div>
          <div class="input-field col s12 m8">
            <input id="calorie_finder" type="text">
            <label for="calorie_finder">Food item here</label>
            <center><button class = "btn lime waves-effect waves-teal wow zoomIn " onclick="calfind_card()" id="cal_find_btn">Find</button></center>
          </div>
        </div>
        <div class="col s12 m6" id="cal_card">
          <div class="card-panel lime">
            <span class="white-text" id='calorie_card'>
            </span>
          </div>
        </div>
      </div>
  </div>
  


  <div class="divider"></div>

  <!--Talk to an expert section-->
  <div class="container">
    <div id="sec_Talk_Expert" >
      <center><h1 class = "header center teal-text text-darken-1 wow zoomIn" data-wow-delay = "0.3s">Talk to an Expert</h1></center>
    </div>
    <div class="row">

      <div class = "col s12 m12 l4 wow zoomIn" data-wow-delay = "0.3s">
        <center><img class = "card-panel hoverable responsive-img" width = "300" height="300" src="./img/exp.jpg"></center>
      </div>

      <div class = "col s12 m12 l8  wow zoomIn" data-wow-delay = "0.3s">
        We'll provide you with a platform where you will have the opportunity to meet/contact skilled dietitians. If you find that eating healthy is difficult to work into your lifestyle because of certain road blocks, a dietitian can work with you to find solutions to problems and barriers. Additionally, they can provide tips, tricks and resources that can assist any individual in reaching their full potential. Drop them a query and they'll get back to you.  
        <br><br>
        <center><a href = "http://localhost/HT/talktoexpert.php"  class = "btn lime waves-effect waves-teal wow zoomIn">Talk</a></center>                  
      </div>

    </div>
  </div>  
  
  <footer class="page-footer lime">
    <div class="footer-copyright">
      <center><b>Follow us on twitter @htracker</b></center>
    </div>
  </footer>

    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/dbdata.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/wowinit.js"></script>
  <script type="text/javascript" src="js/home.js"></script>
  <script type="text/javascript" src="js/login_db_select.js"></script>

  </body>
</html>