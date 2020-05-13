<?php
$orderid = $_POST['orderid'];
$email = $_POST['email'];
echo $orderid;
$db_handle = pg_connect("host = localhost dbname=raashan user=postgres password=naresh" ) or die('Could not connect: ' . pg_last_error   ());
$query = "update order_details set status='cancelled' where order_id='".$orderid."';";
echo $query;
$result = pg_exec($db_handle, $query);
$result1 = pg_send_query($db_handle, $query);

	header("Location:Cus_history.php?emailid=".$email);
	?>
