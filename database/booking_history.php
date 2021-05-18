<?php
session_start();
require 'connect_database.php';

$sql = $dbh->prepare("SELECT rooms.room_id, room_type.room_type_names ,room_type.price ,room_type.guest_limit ,booking.check_in_date, booking.check_out_date FROM room_type 
						JOIN rooms ON room_type.room_type_id = rooms.room_type_id 
						JOIN booking ON rooms.room_id = booking.room_id WHERE booking.customer_id = ? ");
$sql->execute([$_SESSION['customer']]);
// print_r($sql->errorInfo());
$output = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>