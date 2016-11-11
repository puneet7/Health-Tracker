<?php 


if (isset($_SERVER['HTTP_ORIGIN'])) {
    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
    // you want to allow, and if so:
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}

require_once 'connectdb.php';

//Check if all fields in the modal are set
if(isset($_POST['testcal']) ){	

 	//Get all the required attributes. htmlentities is used to convert some chars to html entities. Example: tags won't be parsed by the browser 
	$tcal = htmlentities($_POST['testcal']);

	//Make sure no field is left empty
	if(!empty($tcal)){

		//This variable stores the query you want to run
		$sql_query = "SELECT `Cal` FROM `lunch`	";

		//Fires a query in a if condition with '@' operator (@ operator suppresses errors). If any error occurs while executing the query, else block gets executed
		if($result = mysqli_query($conn, $sql_query)){
			$row = mysqli_fetch_all($result, MYSQLI_NUM);
			print_r($row);
		}
		else{
			echo 'Failed';
		}

	}

	else{
		echo '<span style = "color:red;">Please fill all the fields</span>'; 
	}
	
}

?>

