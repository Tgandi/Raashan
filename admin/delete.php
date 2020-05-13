
 <?php

 
 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  
 if(!$dbconn)
	die("Db Connection not made<br>");
 $fields = $_POST['fields'];
 $data = $_POST['data'];
 $table_name = $_POST['name'];
 $data2 = pg_query($dbconn, "SELECT * FROM $table_name LIMIT 1");
 $data2 = pg_fetch_all($data2);
//echo $data;
//echo $table_name;
 $data2 = $data2[0];
 $i=0;
 $data = explode(",",$data);
 foreach($data2 as $k=>$v) {
	$data2[$k] = $data[$i];
	$i++;
 }
 $data = pg_convert($dbconn, $table_name,$data2);
 $acc='';
 $flds=explode(",",$fields);
 
 $s = sizeof($flds);
 var_dump($data);	
 //echo $data['"'.$flds[0].'"'];
 for($i=0;$i<$s;$i++) {
	if($i!=$s-1)
	$acc =  $acc.$flds[$i]." = ".$data['"'.$flds[$i].'"']." AND ";
	else
	$acc =  $acc.$flds[$i]." = ".$data['"'.$flds[$i].'"'];
	
 }

 $data = implode(", ",$data);
 //echo $acc;
 $sql = 'DELETE FROM '.$table_name. ' WHERE ' .$acc;
 //echo $sql;
$result = pg_query($dbconn, $sql);


echo $result;

if (!$result) {


    die("Error in insertion " . pg_last_error());

	}
else
	{
		echo "deletion";
	}
#print_r($pk_show);

 
?>

