
 <?php

 
 //$dbconn = pg_connect("host=localhost port=5432 dbname=university user=postgres password=parmeet1992");
 
 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  
 if(!$dbconn)
	die("Db Connection not made<br>");
 
$sql = "DELETE FROM order_details where order_id='".$_GET['id']."'";
$result = pg_query($dbconn, $sql);


echo $result;

if (!$result) {


    die("Error in deletion " . pg_last_error());

	}
else
	{
		header("Location: view_order.php");
	}

 
?>

