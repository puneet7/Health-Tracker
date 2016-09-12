<?php 

include 'connectdb.php';

//Check if all fields in the modal are set
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email_id']) && isset($_POST['pass']) ){	

 	//Get all the required attributes. htmlentities is used to convert some chars to html entities. Example: tags won't be parsed by the browser 
	$fname = htmlentities($_POST['fname']);
	$lname = htmlentities($_POST['lname']);
	$email_id = htmlentities($_POST['email_id']);
	$pass = htmlentities($_POST['pass']);

	//Make sure no field is left empty
	if(!empty($fname) && !empty($lname) && !empty($email_id) && !empty($pass) ){

		//This variable stores the query you want to run
		$sql_query = "INSERT INTO `htracker`.`userdetails` (`ID`, `Fname`, `Lname`, `Email`, `Password`) VALUES (NULL, '$fname', '$lname', '$email_id', '$pass')";

		//Fires a query in a if condition with '@' operator (@ operator suppresses errors). If any error occurs while executing the query, else block gets executed
		if(mysqli_query($conn, $sql_query)){
			echo '<span style = "color:green">Account Created Succesfully. Please login to continue</span>';
		}
		else{
			echo '<span style = "color:red;">This email is already registered on the website</span>';
		}

	}

	else{
		echo '<span style = "color:red;">Please fill all the fields</span>'; 
	}
	
}

?>