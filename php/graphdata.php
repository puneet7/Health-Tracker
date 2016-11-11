<?php 

session_start();

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
// print_r($_SESSION['login_user']);
$useTable = 'userdetails';
if(isset($_SESSION['admin'])){
	$useTable = 'admindetails';
}

if(isset($_SESSION['expert'])){
	$useTable = 'expertdetails';
}

if(isset($_POST['intake']) ){	

 	//Get all the required attributes. htmlentities is used to convert some chars to html entities. Example: tags won't be parsed by the browser 
	$tcal = htmlentities($_POST['intake']);

	//Make sure no field is left empty
	if(!empty($tcal)){
		$current_user = $_SESSION["login_user_session"];
		//This variable stores the query you want to run
		// $sql_query = "SELECT `cal_history` FROM  ".$useTable."  WHERE `Email` = '$current_user'";

		$intake = $_POST['intake'];
		if(mysqli_query($conn, "UPDATE  ".$useTable."  SET cal_history = '$intake' WHERE Email = '$current_user'" )){

		}
		else{	
			echo 'Failed';
		}

	}

	else{
		echo '<span style = "color:red;">Please fill all the fields</span>'; 
	}
	
}

if(isset($_POST['exlog']) ){	

 	//Get all the required attributes. htmlentities is used to convert some chars to html entities. Example: tags won't be parsed by the browser 
	$tcal = htmlentities($_POST['exlog']);

	//Make sure no field is left empty
	if(!empty($tcal)){
		$current_user = $_SESSION["login_user_session"];
		//This variable stores the query you want to run
		// $sql_query = "SELECT `cal_history` FROM  ".$useTable."  WHERE `Email` = '$current_user'";

		$burnlog = $_POST['exlog'];
		if(mysqli_query($conn, "UPDATE  ".$useTable."  SET burn_history = '$burnlog' WHERE Email = '$current_user'" )){

		}
		else{	
			echo 'Failed';
		}

	}

	else{
		echo '<span style = "color:red;">Please fill all the fields</span>'; 
	}
	
}



if(isset($_POST['testcal']) ){	

 	//Get all the required attributes. htmlentities is used to convert some chars to html entities. Example: tags won't be parsed by the browser 
	$tcal = htmlentities($_POST['testcal']);

	//Make sure no field is left empty
	if(!empty($tcal)){
		$current_user = $_SESSION["login_user_session"];
		//This variable stores the query you want to run
		$sql_query = "SELECT `cal_history`, `burn_history` FROM  ".$useTable."  WHERE `Email` = '$current_user'";

		// $temp = $_POST['temp'];
		// mysqli_query($conn, "UPDATE  ".$useTable."  SET cal_history = '$temp' WHERE Email = '$current_user'" );
		
		//Fires a query in a if condition with '@' operator (@ operator suppresses errors). If any error occurs while executing the query, else block gets executed
		if($result = mysqli_query($conn, $sql_query)){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			// echo "Query succesfully run";
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


if(isset($_POST['goals']) ){	


	function generateMeal($meal_array, $meal_limit, $max_diff){
		$totalmeal_cal = 0;
		$i = 0;
		$multiplier = 1;
		$max_rechecks = 75;
		$valid_meal = array();

		while($totalmeal_cal<=$meal_limit && $max_rechecks > 0){
			$key = array_rand($meal_array);
			$totalmeal_cal = $totalmeal_cal + $meal_array[$key]['Cal'];
			$randomFloat = rand(0, 10) / 10;
			if($randomFloat>0.75){
				$totalmeal_cal = $totalmeal_cal + $meal_array[$key]['Cal'];
				if($totalmeal_cal<=$meal_limit){
					$valid_meal[$i++] = $meal_array[$key];
				}
				else{
					$totalmeal_cal = $totalmeal_cal - $meal_array[$key]['Cal'];	
				}
			}
			if($totalmeal_cal<=$meal_limit){
				$valid_meal[$i++] = $meal_array[$key];
				// print_r($meal_array);
			}
			$force_recheck = ($totalmeal_cal - $meal_array[$key]['Cal']) + $max_diff;
			if( ($totalmeal_cal > $meal_limit) && $force_recheck <= $meal_limit ){
				$totalmeal_cal = $totalmeal_cal - $meal_array[$key]['Cal'];	
			}
			unset($meal_array[$key]);
			$max_rechecks--;
		}

		$final_meal = json_encode($valid_meal);
		echo $final_meal."---";
	}


	$current_user = $_SESSION["login_user_session"];
	if(!empty($_POST['goals'])){
	 	//Get all the required attributes. htmlentities is used to convert some chars to html entities. Example: tags won't be parsed by the browser 
		$goals = htmlentities($_POST['goals']);
		$llimit = 0.30*$goals;
		$blimit = 0.35*$goals;
		$slimit = 0.15*$goals;
		$dlimit = 0.20*$goals;
		$veg_nonveg_check = '';

		if($veg_nonveg_query = mysqli_query($conn, "SELECT `Type` FROM  ".$useTable."  WHERE `Email` = '$current_user'"))
			$vn_type = mysqli_fetch_row($veg_nonveg_query);

		if($vn_type[0] == 'v')
			$veg_nonveg_check = " AND `Type` = 'v' ";

		$testmeal = 'lunch';
		if($lquery = mysqli_query($conn, "SELECT `Fname`, `Cal` FROM `lunch` WHERE `Cal` <= '$llimit' ".$veg_nonveg_check )){
			$lunch = mysqli_fetch_all($lquery, MYSQLI_ASSOC);

			generateMeal($lunch, $llimit, 300);

		}

		if($bquery = mysqli_query($conn, "SELECT `Fname`, `Cal` FROM `breakfast` WHERE `Cal` <= 0.35*'$goals' ".$veg_nonveg_check )){
			$bfast = mysqli_fetch_all($bquery, MYSQLI_ASSOC);

			generateMeal($bfast, $blimit, 300);
		}

		if($dquery = mysqli_query($conn, "SELECT `Fname`, `Cal` FROM `dinner` WHERE `Cal` <= 0.2*'$goals' ".$veg_nonveg_check )){
			$dinner = mysqli_fetch_all($dquery, MYSQLI_ASSOC);

			generateMeal($dinner, $dlimit, 400);

		}

		if($squery = mysqli_query($conn, "SELECT `Fname`, `Cal` FROM `snacks` WHERE `Cal` <= 0.15*'$goals' ".$veg_nonveg_check )){
			$snacks = mysqli_fetch_all($squery, MYSQLI_ASSOC);

			generateMeal($snacks, $slimit, 400);
		}
		
	}

}
else
	echo 'Forbidden. You do not have access to this page';

?>

