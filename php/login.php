<?php 


require_once 'connectdb.php';
session_start();

if(isset($_POST['email_id']) && isset($_POST['pass']) && isset($_POST['user_login']))
{
	// print_r($_POST);
	$email = htmlentities($_POST['email_id']);
	$pwd = htmlentities($_POST['pass']);
	$password = md5($pwd);
	if(!empty($email) && !empty($password)){
		$sql_query = "SELECT ID FROM userdetails WHERE Email = '$email' and Password = '$password'";
		$result = mysqli_query($conn,$sql_query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		 // If result matched $email and $password, table row must be 1 row
		      if($count == 1)
		      {
		         $_SESSION['login_user_session'] = $email;
		         echo '<span style = "color:green">Loggedin Successfully</span>';
		      }
		          
		      
		      else {
		         echo '<span style = "color:red">Your Login Name or Password is invalid</span>';
		      }
		    }
				else
				{
					echo '<span style = "color:red;">Please fill all the fields</span>'; 
			  }
}		   		   


if(isset($_POST['email_id']) && isset($_POST['pass']) && isset($_POST['expert_login']))
{
	$email = htmlentities($_POST['email_id']);
	$password = md5(htmlentities($_POST['pass']));
	if(!empty($email) && !empty($password)){
		$sql_query = "SELECT ID FROM expertdetails WHERE Email = '$email' and Password = '$password'";
		$result = mysqli_query($conn,$sql_query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		 // If result matched $email and $password, table row must be 1 row
		      if($count == 1)
		      {
		         $_SESSION['login_user_session'] = $email;
		         $_SESSION['expert']=1;
		         echo '<span style = "color:green">Loggedin Successfully</span>';
		      }
		          
		      
		      else {
		         echo '<span style = "color:red">Your Login Name or Password is invalid</span>';
		      }
		    }
				else
				{
					echo '<span style = "color:red;">Please fill all the fields</span>'; 
			  }
}	


if(isset($_POST['email_id']) && isset($_POST['pass']) && isset($_POST['admin_login']))
{
	$email = htmlentities($_POST['email_id']);
	$password = md5(htmlentities($_POST['pass']));
	if(!empty($email) && !empty($password)){
		$sql_query = "SELECT ID FROM admindetails WHERE Email = '$email' and Password = '$password'";
		$result = mysqli_query($conn,$sql_query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		 // If result matched $email and $password, table row must be 1 row
		      if($count == 1)
		      {
		         $_SESSION['login_user_session'] = $email;
		         $_SESSION['admin']=1;
		         echo '<span style = "color:green">Loggedin Successfully</span>';
		      }
		          
		      
		      else {
		         echo '<span style = "color:red">Your Login Name or Password is invalid</span>';
		      }
		    }
				else
				{
					echo '<span style = "color:red;">Please fill all the fields</span>'; 
			  }
}		   		   

?>

