 <?php
	session_start();
	require 'connect_database.php';
	if (/*isset($_POST['arrive']) &&*/ isset($_POST['depart']) && isset($_SESSION['customer'])) {
	 $sql = $dbh->prepare("select min(room_id) AS room_id, room_status from rooms join room_type on room_type.room_type_id = rooms.room_type_id where room_status = 0 and room_type.room_type_id =?");
	 $sql->execute([$_POST['room_type_id']]);
	 $output = $sql->fetchAll();
	 /*foreach ($output as $value) {
  		echo "<br> $value <br>";
		  foreach($value as $x => $val) {
  			echo "$x = $val<bn>";
			}
		}*/
	 if( $output[0]['room_id'] != '') 
	 {
	   echo 'success';
	   $no_room = $output[0]['room_id'];
	   $sql = $dbh->prepare("insert into booking (check_in_date, check_out_date, customer_id, room_id) values (?, ?,?,?)");
	   $sql->execute([$_POST['arrive'], $_POST['depart'], $_SESSION['customer'], $no_room]);
	   $sql = $dbh->prepare("update rooms set room_status = 1 where room_id = ?" );
	   $sql->execute([$no_room]);
	 }
	 else 
	 {
	  echo 'This room type is fully booked. Please select other rooms';
	 } 
	}
	else 
	{
	 echo 'no data';
	}
?>