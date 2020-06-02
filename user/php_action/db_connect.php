<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "durable";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
$connect->set_charset("utf8");
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>