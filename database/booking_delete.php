<?php
session_start();
require 'connect_database.php';
if (isset($_POST['room_id'])) {
	$sql = $dbh->prepare("DELETE FROM booking WHERE room_id = ?");
	$sql->execute([$_POST['room_id']]);
	$sql = $dbh->prepare("update rooms set room_status = 0 where room_id = ?" );
	$sql->execute([$_POST['room_id']]);
	echo 'Please refresh to see the updated version';
}
else {
	echo 'Please enter a valid room id';
}
// print_r($sql->errorInfo());
// $output = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>