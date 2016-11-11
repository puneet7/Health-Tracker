function signup_click(){

	document.getElementById('signup_btn').disabled = true;
	document.getElementById('signup_btn').value = "Creating Account..";

	// Block Invalid Email Submission
	if(document.getElementById('signup_email').className == "validate invalid"){
		document.getElementById('signup_btn').disabled = false;
		document.getElementById('signup_btn').value = "Sign Up";
		document.getElementById("errormessage").innerHTML = "Invalid Email";
		return;
	}

	// Get user's sign up details to pass in AJAX request
	var fname = document.getElementById('first_name').value;
	var lname = document.getElementById('last_name').value;
	var email_id = document.getElementById('signup_email').value;
	var pass = document.getElementById('signup_pass').value;
	var signup_details = "fname="+fname+"&lname="+lname+"&email_id="+email_id+"&pass="+pass;


	//Send AJAX request 

	var xhr = new XMLHttpRequest();

	xhr.open("POST", "http://localhost/HT/php/signup.php", true);  
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xhr.send(signup_details);

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementById("errormessage").innerHTML = xhr.responseText;

			//TODO: Change this if to something better later
			if(xhr.responseText== '<span style = "color:green">Account Created Succesfully. Please login to continue</span>'){	
				document.getElementById('signup_btn').innerHTML = "Account Created";
			}
			else{
				document.getElementById('signup_btn').disabled = false;
				document.getElementById('signup_btn').value = "Sign Up";
			}
		}
	};

	//Block page refresh
	event.preventDefault();
}

function login_user_click(){

	console.log('sdfsdf');
	var email_id=document.getElementById('login_email').value;
	var pass=document.getElementById('login_pass').value;
	var login_details='email_id='+email_id+'&pass='+pass+'&user_login=1';
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "http://localhost/HT/php/login.php", true);  
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xhr.send(login_details);

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200)
		{
				if(xhr.responseText.toString().trim()=='<span style = "color:green">Loggedin Successfully</span>')
				{
					location.reload();
					// document.getElementById("user_id").innerHTML = "Test";
				}
				else 
				{
					document.getElementById("login_errormessage").innerHTML = xhr.responseText;
				}
		}
	};


}

function login_expert_click(){
	var email_id=document.getElementById('login_email').value;
	var pass=document.getElementById('login_pass').value;
	var login_details='email_id='+email_id+'&pass='+pass+'&expert_login=1';
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "http://localhost/HT/php/login.php", true);  
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xhr.send(login_details);

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200)
		{
				if(xhr.responseText.toString().trim()=='<span style = "color:green">Loggedin Successfully</span>')
				{
					window.location.replace("http://localhost/HT/expertpg.php");
				}
				else 
				{
					document.getElementById("login_errormessage").innerHTML = xhr.responseText;
				}
		}
	};
}

	function login_admin_click(){
	var email_id=document.getElementById('login_email').value;
	var pass=document.getElementById('login_pass').value;
	var login_details='email_id='+email_id+'&pass='+pass+'&admin_login=1';
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "http://localhost/HT/php/login.php", true);  
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xhr.send(login_details);

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200)
		{
				if(xhr.responseText.toString().trim()=='<span style = "color:green">Loggedin Successfully</span>')
				{
					// location.reload();
					// document.getElementById("user_id").innerHTML = "Test";
					window.location.replace("http://localhost/HT/admin.php");
				}
				else 
				{
					document.getElementById("login_errormessage").innerHTML = xhr.responseText;
				}
		}
	};


}