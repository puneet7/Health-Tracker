<?php 

//Database 
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$error = 'Could Not Connect';
$db_conn_err = 'There was an error while establishing a connection with the Database, please try again after some time';
$mysql_db ='htracker';

//Establish connection with the server. @ is an error control operator, any error/warning message genereated will not be displayed on the browser. Rather the other message inside die("...") will be displayed.

@mysql_connect($mysql_host, $mysql_user, $mysql_password) or die($error);

mysql_select_db($mysql_db) or die($db_conn_err);

?>
