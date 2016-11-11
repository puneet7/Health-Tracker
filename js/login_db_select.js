
function login_user(){
	document.getElementById('login_modal_title').innerHTML = 'User Login';
	document.getElementById('login_user_btn').style.display='block';
	document.getElementById('login_user_btn').className='btn-flat lime modal-action waves-effect waves-teal';
	document.getElementById('login_expert_btn').style.display='none';
	document.getElementById('login_admin_btn').style.display='none';

}

function login_expert(){
	document.getElementById('login_modal_title').innerHTML = 'Expert Login';
	document.getElementById('login_expert_btn').style.display='block';
	document.getElementById('login_expert_btn').className='btn-flat lime modal-action waves-effect waves-teal';
	document.getElementById('login_user_btn').style.display='none';
	document.getElementById('login_admin_btn').style.display='none';	
}
function login_admin(){
	document.getElementById('login_expert_btn').style.display='none';
	document.getElementById('login_modal_title').innerHTML = 'Admin Login';
	document.getElementById('login_admin_btn').style.display='block';
	document.getElementById('login_admin_btn').className='btn-flat lime modal-action waves-effect waves-teal';
	document.getElementById('login_user_btn').style.display='none';
	// document.getElementById('login_expert_btn').style.display='none';

}