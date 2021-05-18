<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ocloud";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if ($conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

$dsn = 'mysql:dbname=ocloud; host=127.0.0.1:49382';
$user = 'azure';
$password = '6#vWHD_$';

try {
  $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  $dbh->exec("SET NAME UTF8");
} catch(PDOException $exc) {
  echo $exc->getMessage();
}

?>
