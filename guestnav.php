 
    <div class = "navbar-fixed"> 
      <nav>
        <div class="nav-wrapper lime">
            <a href="#top_page" class="smoothScroll brand-logo waves-effect waves-teal">Health Tracker</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#sec_planmydiet" class="smoothScroll waves-effect waves-teal">Plan My Diet</a></li>
              <li><a href="#sec_BMI" class="smoothScroll waves-effect waves-teal">MISC</a></li>
              <li><a href="#sec_Talk_Expert" class="smoothScroll waves-effect waves-teal">Talk to an Expert</a></li>
              <li><a class="dropdown-button" href="#!" data-activates="login-dropdown">Login As<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="#signupmodal" class="waves-effect waves-teal modal-trigger">Sign Up</a></li>
            </ul>

            <ul class="side-nav " id="mobile-demo">
              <li><a href="#top_page" class="smoothScroll waves-effect waves-teal">Home</a></li>
              <li><a href="#sec_planmydiet" class="smoothScroll waves-effect waves-teal">Plan My Diet</a></li>
              <li><a href="#sec_BMI" class="smoothScroll waves-effect waves-teal">MISC</a></li>
              <li><a href="#sec_Talk_Expert" class="smoothScroll waves-effect waves-teal">Talk to an Expert</a></li>
              <li><a href="javascript:void(0);">LogIn As:</a></li>
              <li>
                <a href="#loginmodal" class="waves-effect waves-teal modal-trigger" onclick="document.getElementById('login_modal_title').innerHTML = 'User Login';">&nbsp;&nbsp;&nbsp;User</a>
              </li>
              <li>
                <a href="#loginmodal" class="waves-effect waves-teal modal-trigger" onclick="login_expert()">&nbsp;&nbsp;&nbsp;Expert</a>
              </li>
              <li>
                <a href="#loginmodal" class="waves-effect waves-teal modal-trigger" onclick="document.getElementById('login_modal_title').innerHTML = 'Admin Login';">&nbsp;&nbsp;&nbsp;Admin</a> 
              </li>
              <li><a href="#signupmodal" class="waves-effect waves-teal modal-trigger">Sign Up</a></li>
            </ul>
        </div>
      </nav>
    </div>

<!-- Dropdown Structure -->
  <ul id="login-dropdown" class="dropdown-content">
    <li><a href="#loginmodal" class="waves-effect waves-teal modal-trigger" onclick="login_user()">User</a></li>
    <li><a id='explogin' href="#loginmodal" class="waves-effect waves-teal modal-trigger" onclick="login_expert()">Expert</a></li>
    <li class="divider"></li>
    <li><a href="#loginmodal" class="waves-effect waves-teal modal-trigger"  onclick="login_admin()">Admin</a></li>
  </ul>
  
   <!-- Signup Modal Structure -->
  <div id="signupmodal" class="modal" style="border:5px solid #cddc39">
    <div class="modal-content">
      <h4>Create an account</h4>
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
            <button type="submit" class="btn-flat lime modal-action waves-effect waves-teal" id = "signup_btn" onclick="signup_click()">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Structure common to all LogIn -->
  <div id="loginmodal" class="modal" style="border:5px solid #cddc39">
    <div class="modal-content">
      <h4 id="login_modal_title"></h4>

          <div id = "login_errormessage"></div>

          <div class="row">
            <div class="input-field col s12">
              <input value = "" id="login_email" type="text" class = "validate">
              <label for="first_name">Email</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input value = "" id="login_pass" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>

          <div class="row">
            <button type="submit" class="btn-flat lime modal-action waves-effect waves-teal disabled" id = "login_user_btn" onclick="login_user_click()">Log In</button>
            <button type="submit" class="btn-flat lime modal-action waves-effect waves-teal disabled" id = "login_expert_btn" onclick="login_expert_click()">Log In</button>
            <button type="submit" class="btn-flat lime modal-action waves-effect waves-teal disabled" id = "login_admin_btn" onclick="login_admin_click()">Log In</button>
          </div>

    </div>
  </div>