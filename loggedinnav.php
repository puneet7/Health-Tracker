<div class = "navbar-fixed"> 
  <nav>
    <div class="nav-wrapper lime">
        <a href="#" class="brand-logo waves-effect waves-lime">Health Tracker</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="http://localhost/HT/index.php" class="smoothScroll waves-effect waves-teal">Home</a></li>
          <li><a href="http://localhost/HT/index.php#sec_planmydiet" class="smoothScroll waves-effect waves-teal">Plan My Diet</a></li>
          <li><a href="http://localhost/HT/index.php#sec_BMI" class="smoothScroll waves-effect waves-teal">MISC</a></li>
          <li><a href="http://localhost/HT/index.php#sec_Talk_Expert" class="smoothScroll waves-effect waves-teal">Talk to an Expert</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="logout-dropdown"><span id = "user_id"></span><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        <ul class="side-nav " id="mobile-demo">
          <li><a href="#top_page" class="smoothScroll waves-effect waves-lime">Home</a></li>
          <li><a href="#sec_planmydiet" class="smoothScroll waves-effect waves-lime">Plan My Diet</a></li>
          <li><a href="#sec_BMI" class="smoothScroll waves-effect waves-lime">MISC</a></li>
          <li><a href="#sec_Talk_Expert" class="smoothScroll waves-effect waves-lime">Talk to an Expert</a></li>
          <li><a href="http://localhost/HT/php/logout.php" class = "waves-effect waves-lime">Logout</li>
        </ul>
    </div>
  </nav>
</div>

<!-- Dropdown Structure -->
<ul id="logout-dropdown" class="dropdown-content">
  <li><a href="http://localhost/HT/php/logout.php" class="waves-effect waves-lime">Logout</a></li>
</ul>