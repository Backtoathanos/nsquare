<?php
// const DB_SERVER = "localhost";

// const DB_USER = "root";
// const DB_PASSWORD = '';
// const DB = "nsquare";
// const AccountLogin="";
// const AccountPassword='';
// const AccountPassword1='';

// databaseconnectiviy
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'nsquare');
class DATABASE {
	function __construct(){
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	mysqli_set_charset($con,'utf8');
	$this->nsquare_db=$con;
	// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to Database: " . mysqli_connect_error();
		}
	}
}

?>

<?php

$server="localhost";
$user="root";
$password="";
$db="nsquare";
$con=mysqli_connect($server,$user,$password,$db) or die("could not connect");
mysqli_set_charset($con,'utf8');

?>



