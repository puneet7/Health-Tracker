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

//Database 
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$error = 'Could Not Connect';
$db_conn_err = 'There was an error while establishing a connection with the Database, please try again after some time';
$mysql_db ='htracker';

//Establish connection with the server. @ is an error control operator, any error/warning message genereated will not be displayed on the browser. Rather the other message inside die("...") will be displayed.

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die($error);

mysqli_select_db($conn, $mysql_db) or die($db_conn_err);

?>
