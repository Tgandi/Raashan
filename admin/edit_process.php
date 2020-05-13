
 <?php

 
 $table_name = $_GET['table_name'];
 $old_values =$_GET['old_values'];
 
 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  $query = "UPDATE ";
$query = $query.$table_name." SET ";

 if(!$dbconn)
	die("Db Connection not made<br>");
 $old_values=explode(",",$old_values);
 //echo $data;
//echo $table_name;

print_r($_GET);
 $data2 = pg_query($dbconn, "SELECT * FROM $table_name LIMIT 1");
 $data2 = pg_fetch_all($data2);
//echo $data;
//echo $table_name;
 $data2 = $data2[0];
 $i=0;
 //$data = explode(",",$data2);
 foreach($data2 as $k=>$v) {
	$data2[$k] = $_GET[$k];
	$i++;
 }
 $data = pg_convert($dbconn, $table_name,$data2);
 $acc='';
 
 $s=sizeof($data);
 
 $i=0;
 foreach($data as $k=>$v){
	$k=trim($k,'"');
	if($i!=$s-1)
	$acc =  $acc.$k." = ".$v." , ";
	else
	$acc=$acc.$k." = ".$v;
	$i++;
 }
$query=$query.$acc;

$data2 = pg_query($dbconn, "SELECT * FROM $table_name LIMIT 1");
$data2 = pg_fetch_all($data2);
//echo $data;
//echo $table_name;
 $data2 = $data2[0];
 //var_dump($data2);
 $i=0;
 //$data = explode(",",$data2);
 foreach($data2 as $k=>$v) {
	$data2[$k] =$old_values[$i];
	$i++;
 }
 $data = pg_convert($dbconn, $table_name,$data2);
 $acc='';
 
 $s=sizeof($data);
 
 $i=0;
 foreach($data as $k=>$v){
	//var_dump($k);
	//str_replace('"', "", $k);
	//str_replace("'", "", $k);
	//$k=substr($k, -1);
	$k=trim($k,'"');
	//var_dump($k);
	if($i!=$s-1)
	$acc =  $acc.$k." = ".$v." AND ";
	else
	$acc=$acc.$k." = ".$v;
	$i++;
 }
$query=$query." WHERE ".$acc;
echo $query;

$result = pg_query($dbconn, $query);



if (!$result) {


    die("Error in update " . pg_last_error());

	}
else
	{
		echo "Successfully Update.";
	}
	
header("Location: index.php?q_item=$table_name");

?>

