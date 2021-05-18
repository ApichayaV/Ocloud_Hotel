<?php

require 'connect_database.php';
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['idcard']) && isset($_POST['telephone']) && isset($_POST['address']) && isset($_POST['gender']) ) {
	
	$sql = $dbh->prepare("select * from customers where email = ?");
	$sql->execute([$_POST['email']]);
	$output = $sql->fetchAll();
	if(count($output)>0) {
		echo 'fail';
		
	} else {
		$sql = $dbh->prepare("insert into customers (email, password, first_name, last_name, id_card, telephone, address, gender) values (?, ?,? ,?,?,?,?,?)");
	$sql->execute([$_POST['email'], $_POST['password'],$_POST['firstname'],$_POST['lastname'],$_POST['idcard'], $_POST['telephone'], $_POST['address'],$_POST['gender']]);
	/*print_r($sql->errorInfo());*/
			echo 'success';
	}
	
} else {
	echo 'no data';
}
?>