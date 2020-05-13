
 <?php

 
 
 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  
 if(!$dbconn)
	die("Db Connection not made<br>");
 $table_name = $_GET['name'];
 $key = pg_escape_string($_GET['key']);
 
if($table_name == 'customer'){
	$sql = "SELECT * FROM $table_name where email='".$key."'";
}
else if ($table_name == 'grocer'){
	$sql = "SELECT * FROM $table_name where mobile=$key";
}
 $data2 = pg_query($dbconn, $sql);
 $data2 = pg_fetch_all($data2);
//echo $data;
//echo $table_name;

$count=1;
echo "<form action='edit_process.php' method='get'>";
foreach($data2 as $k)
{
		while ($fruit_name = current($k)) {
				echo key($k).":<input type='text' name='".key($k)."'"."value='".$fruit_name."'><br>";
				next($k);
				}
		$f=implode(",",$k);
}
echo "<input type='hidden' name='old_values' value='".$f."'>";

echo "<input type='hidden' name= 'table_name' value='".$table_name."'>";

echo "<input type='submit' value='Edit'>";
echo "</form></table>";
 
?>

