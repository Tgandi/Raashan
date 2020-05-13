<?php
if(isset($_POST['Save'])){
	$email=$_POST['originalemail'];
	$name = $_POST['username'];
	$emailNew = $_POST['useremail'];
	$housenumber = $_POST['userhousenumber'];
	$street = $_POST['userstreet'];
	$city=$_POST['usercity'];
	$state = $_POST['userstate'];
	
	//echo "hi";
	$query = "update customer set name='".$name."',email='".$emailNew."',house_no='".$housenumber."',street='".$street."',city='".$city."',state='".$state."' where email='".$email."';";
	$db_handle = pg_connect("host = localhost dbname=raashan user=postgres password=naresh" ) or die('Could not connect: ' . pg_last_error   ());
//	echo $query;
	$result1 = pg_send_query($db_handle, $query);
	header("Location:cust_postlogin.php?email=".$emailNew);
}

?>
