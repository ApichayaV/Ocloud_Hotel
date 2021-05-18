<?php
session_start();
require 'connect_database.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
	$sql = $dbh->prepare("select * from customers where email = ? and password = ?");
	$sql->execute([$_POST['email'], $_POST['password']]);
	$output = $sql->fetchAll();
    if(count($output)>0) {
		echo 'success';
		$_SESSION['customer'] = $output[0]['customer_id'];
	} else {
		echo 'fail';
	}
} else {
	echo 'no data';
}