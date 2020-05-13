
 <?php

 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  
 if(!$dbconn)
	die("Db Connection not made<br>");
 $data = $_POST['data'];
 $table_name = $_POST['name'];
 $data2 = pg_query($dbconn, "SELECT * FROM $table_name LIMIT 1");
 $data2 = pg_fetch_all($data2);
 $data2 = $data2[0];
 $i=0;
 $data = explode(",",$data);
 foreach($data2 as $k=>$v) {
	$data2[$k] = $data[$i];
	$i++;
 }
 $data = pg_convert($dbconn, $table_name,$data2);
 $data = implode(", ",$data);
 
$sql = "INSERT INTO $_POST[name] VALUES (".$data.")";
$result = pg_query($dbconn, $sql);

if (!$result) {


    die("Error in insertion " . pg_last_error());

	}
else
	{
		echo "successful insertion";
	}
echo $result;

#print_r($pk_show);

 
?>

