<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>

<body>
  
    <div class = "navbar-fixed"> 
      <nav>
        <div class="nav-wrapper orange accent-3 ">
            <a href="#" class="brand-logo waves-effect waves-light">Health Tracker</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#top_page" class="smoothScroll waves-effect waves-light">Home</a></li>
              <li><a href="#sec_planmydiet" class="smoothScroll waves-effect waves-light">Plan My Diet</a></li>
              <li><a href="#sec_BMI" class="smoothScroll waves-effect waves-light">MISC</a></li>
              <li><a href="#sec_Talk_Expert" class="smoothScroll waves-effect waves-light">Talk to an Expert</a></li>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login As<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="#signupmodal" class="waves-effect waves-light modal-trigger">Sign Up</a></li>
            </ul>

            <ul class="side-nav " id="mobile-demo">
              <li><a href="#top_page" class="smoothScroll waves-effect waves-orange">Home</a></li>
              <li><a href="#sec_planmydiet" class="smoothScroll waves-effect waves-orange">Plan My Diet</a></li>
              <li><a href="#sec_BMI" class="smoothScroll waves-effect waves-orange">MISC</a></li>
              <li><a href="#sec_Talk_Expert" class="smoothScroll waves-effect waves-orange">Talk to an Expert</a></li>
              <li class = "navbar-text">LogIn As: </li>
              <li>
                <a href="#!">&nbsp;&nbsp;&nbsp;User</a>
                <a href="#!">&nbsp;&nbsp;&nbsp;Expert</a>
                <a href="#!">&nbsp;&nbsp;&nbsp;Admin</a> 
              </li>
              <li><a href="#signupmodal" class="waves-effect waves-orange modal-trigger">Sign Up</a></li>
            </ul>
        </div>
      </nav>
    </div>

<!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">User</a></li>
    <li><a href="#!">Expert</a></li>
    <li class="divider"></li>
    <li><a href="#!">Admin</a></li>
  </ul>
  
   <!-- Signup Modal Structure -->
  <div id="signupmodal" class="modal">
    <div class="modal-content">
      <div class="row">
        <div class="col s12" >
        	<div id = "errormessage"></div>
          <div class="row">
            <div class="input-field col s6">
              <input value = "" id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input value = "" id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input value = "" id="signup_email" type="email" class="validate">
              <label id="check_valid" for="email" data-error = "Wrong Email.">Email</label>
            </div>
            <div class="input-field col s12">
              <input value = "" id="signup_pass" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>

          <div class="row">
            <button type="submit" class="btn-flat modal-action waves-effect waves-orange" id = "signup_btn" onclick="signup_click()">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <header class="salad-cover wow fadeIn" id = "top_page"></header>

  <!-- What we do Section -->
  <div class="container">

      <div class="section" id  ="home_sec">   
         <center><h1 class = "header center orange-text wow bounceInLeft">What we do</h1></center>
         <center class = "wow bounceInRight">Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei. Vel an quas vivendum tincidunt, mel quando ocurreret efficiantur cu. Repudiare posidonium ea sea. Ut error placerat sed, no sit choro utinam inimicus, ponderum laboramus usu te. Dicat regione officiis te sit. Vim cu ceteros volumus.</center><br>
      </div>
      <br><br>

      <div class = "row wow bounceInUp">
          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp" id = "what-we-do-cards" data-wow-delay="0.6s">
            <i class="icon-cloud medium-icon"></i>
              <h5 class = "header orange-text center">Plan Your Diet</h5>
              <hr>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp" id = "what-we-do-cards" data-wow-delay="0.9s">
            <i class="icon-mobile medium-icon"></i>
              <h5 class = "header orange-text center">Track Progress</h5>
              <hr>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp" id = "what-we-do-cards"  data-wow-delay="1.2s">
            <i class="icon-laptop medium-icon"></i>
              <h5 class = "header orange-text center">Calculate BMI</h5>
              <hr>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
          </div>
      </div>

      <br>

      <div class = "row wow bounceInUp">
          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp"  id = "what-we-do-cards" data-wow-delay="1.1s">
            <i class="icon-compass medium-icon"></i>
              <h5 class = "header orange-text center">Recommend Exercises</h5>
              <hr>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp"  id = "what-we-do-cards" data-wow-delay="0.8s">
            <i class="icon-chat medium-icon"></i>
              <h5 class = "header orange-text center">Food Info</h5>
              <hr>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
          </div>

          <div class="card-panel hoverable col l4 m4 s12 wow fadeInUp"  id = "what-we-do-cards" data-wow-delay="0.5s">
            <i class="icon-browser medium-icon"></i>
              <h5 class = "header orange-text center">Contact Dietitians</h5>
              <hr>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
          </div>
      </div>

  </div>

  <div class = "divider"></div>

  <!-- Plan My Diet Section -->
  <div class="container">
      <div class="section" id = "sec_planmydiet">   
          <center><h1 class = "header center orange-text wow fadeInUp" data-wow-delay = "0.3s">Plan My Diet</h1></center>

          <div class = "col s12 m12 l4 wow fadeInUp" data-wow-delay = "0.3s">
              <center><img class = "card-panel hoverable responsive-img" src="http://placehold.it/300x300"></center>
          </div>

          <div class = "row">
              <div class = "col s12 m12 l12 plan_diet wow fadeInUp" data-wow-delay = "0.3s">
                  Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei. Vel an quas vivendum tincidunt, mel quando ocurreret efficiantur cu.Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei.
                  <br>
                  <blockquote>
                    This is an example quotation that uses the blockquote tag.
                  </blockquote>
                  <br><br>
                  <center><a href = "#!"  class = "btn orange waves-effect waves-light">Start Planning</a></center>
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
            <div class="card orange">
              <div class="card-content white-text">
                <h4>BMI Calculator</h4>
                <div class="row">
                        <div id="BMI-weight" class="input-field col s12 label-color ">
                          <input id="My_weight" type="text" >
                          <label for="My_weight">Weight (in kg)</label>
                        </div>
                        <div id="BMI-height" class="input-field col s12 label-color">
                          <input id="My_height" type="text" onkeypress="if (event.keyCode==13) document.getElementById('BMI-btn').click();" >
                          <label for="My_height">Height (in m)</label>
                        </div>
                        <br>
                        <div class="col s8"></div>
                        <button id="BMI-btn" class="btn deep-orange lighten-1 waves-effect waves-light col s4" onclick="BMI_calculator()">Calculate</button>
                        <div id="BMI-result" class="input-field col s12 label-color">
                          <input id="My_BMI" type="text">
                          <label for="My_BMI">Body Mass Index</label>
                        </div>
                </div>
              </div>
            </div>
          </div>
          <div id="BMI-desc" class="col s12 m12">
            <center>
              <h1 id="BMI_header" class = "header center orange-text wow fadeInUp" data-wow-delay="0.6s">BMI Calculator</h1>
              <p id="p-BMI" class = "wow fadeInDown">Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei. Vel an quas vivendum tincidunt, mel quando ocurreret efficiantur cu.Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei.</p><br>
              <button id="btn-show-calc" class="btn orange waves-effect waves-light" onclick="openCalc()">Calculate BMI</button>
            </center>
          </div>
        </div>
      </div>

      <div class="section hide-on-med-and-up"><!-- for small screen -->
        <div class="row">
          <div id="BMI-desc-sm" class="col s12 m12">
            <center>
              <h1 id="BMI_header-sm" class = "header center orange-text wow fadeInUp" data-wow-delay="0.6s">BMI Calculator</h1>
              <p id="p-BMI-sm" class = "wow fadeInDown">Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei. Vel an quas vivendum tincidunt, mel quando ocurreret efficiantur cu.Lorem ipsum dolor sit amet, platonem consulatu pertinacia no eos, tale movet iudicabit id vix. Mei eius essent ei.</p><br>
              <button id="btn-show-calc-sm" class="btn orange waves-effect waves-light" onclick="openCalcS()">Calculate BMI</button>
            </center>
          </div>
          <div id="BMI-calc-card-sm" class="col s12 m7">
            <div class="card orange">
              <div class="card-content white-text">
                <div class="row">
                        <div id="BMI-field" class="input-field label-color col s12">
                          <input id="My_weight-sm" type="text">
                          <label for="My_weight-sm">Weight (in kg)</label>
                        </div>
                        <div id="BMI-field" class="input-field  label-color col s12">
                          <input id="My_height-sm" type="text" onkeypress="if (event.keyCode==13) document.getElementById('BMI-btn-sm').click();">
                          <label for="My_height-sm">Height (in m)</label>
                        </div>
                        <br>
                        <div class="col s7"></div>
                        <button class="btn deep-orange lighten-1 waves-effect waves-light col s5" id = "BMI-btn-sm" onclick="BMI_calculatorS()">Calculate</button>
                        <div id="BMI-field" class="input-field label-color col s12">
                          <input id="My_BMI-sm" type="text">
                          <label for="My_BMI-sm">Body Mass Index</label>
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
        <h1 id="calorie_header" class = "header center orange-text wow fadeInUp" data-wow-delay="0.6s">Calorie Finder</h1>
      </center>
    </div>
     <div class="row">
        <form class="s12" id="cal_find">
          <div class="col m2"></div>
          <div class="input-field col s12 m8">
            <input id="calorie_finder" type="text">
            <label for="calorie_finder">Food item here</label>
            <center><a href = "javascript:void(0)"  class = "btn orange waves-effect waves-light wow zoomIn " onclick="calfind_card()" id="cal_find_btn">Find</a></center>
          </div>
        </form>
        <div class="col s12 m6" id="cal_card">
          <div class="card-panel orange">
            <span class="white-text">I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
            </span>
          </div>
        </div>
      </div>
  </div>  


  <div class="divider"></div>

  <!--Talk to an expert section-->
  <div class="container">
    <div id="sec_Talk_Expert" >
      <center><h1 class = "header center orange-text wow zoomIn" data-wow-delay = "0.3s">Talk to an Expert</h1></center>
    </div>
    <div class="row">

      <div class = "col s12 m12 l4 wow zoomIn" data-wow-delay = "0.3s">
        <center><img class = "card-panel hoverable responsive-img" src="http://placehold.it/300x300"></center>
      </div>

      <div class = "col s12 m12 l8  wow zoomIn" data-wow-delay = "0.3s">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas facilisis nec lacus at varius. Sed nibh odio, venenatis in enim id, tristique convallis est. Ut rutrum congue neque, nec ullamcorper nibh maximus et. Nulla suscipit velit lorem, nec viverra sem condimentum a. Nam bibendum sapien eget vestibulum venenatis.
        <br><br>
        <center><a href = "#!"  class = "btn orange waves-effect waves-light wow zoomIn">Talk</a></center>                  
      </div>

    </div>
  </div>  
  
  <footer class="page-footer orange">
    <div class="footer-copyright">
      <center>We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</center>
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
  </body>
</html>