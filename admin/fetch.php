
<html>
<head>
	</head>
<script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
<script src='all_script.js'></script>
 <?php

 $id = $_GET['id'];
 if(@$_GET['query']){
 	$query = pg_escape_string($_GET['query']);
 }

 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  
 if(!$dbconn)
	echo "Db Connection not made<br>";

if($id == "customer"){
	@$sql = "SELECT * FROM $id where name like '%".$query."%'";
}	
else if($id == "grocer"){
	@$sql = "SELECT * FROM $id where shop_name like '%".$query."%'";
}

$th = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='".$id."'";

$table_headings = pg_query($dbconn, $th);


$count = 1	;
//echo "<ul><li class='active has-sub'><a href='#'><span>Tables</span></a><ul>";
echo "<form id='form1' method='post' action connect='.php'>";
echo "<table>";
echo "<tr>";

//echo $table_headings[2];
//echo $table_headings[3];

$col_names=array();
$count=0;
while($row = pg_fetch_assoc($table_headings))
	{
		echo "<td>";
		echo $row['column_name'];
		$col_names[$count]=$row['column_name'];
		echo "</td>";
		$count+=1;
	}
echo "</tr>";

$result = pg_query($dbconn, $sql);
if (!$result) {
    die("Error in fetching all table names " . pg_last_error());
}

$count=1;
while ($row = pg_fetch_assoc($result)) {	
	echo "<tr id='".$count."'>";
	//echo "<li>"."<a href='#'><span>";
    $temp = $row;
	$cot=0;
	foreach($temp as $var)
	{
		echo "<td class='".$col_names[$cot]."'>";echo $var;echo "</td>";
		$cot=$cot+1;
	}
	//var_dump($row);
	echo "<td>";echo "<a href='' class='del_button' id='del_".$id."_".$count."'>Delete</a>";echo "</td>";
	if($id == 'customer'){
	echo "<td>";echo "<a href='edit.php?name=".$id."&key=".$temp['email']."' class='edit_button'>Edit</a>";echo "</td>";	
	}
	if($id == 'grocer'){
	echo "<td>";echo "<a href='edit.php?name=".$id."&key=".$temp['mobile']."' class='edit_button'>Edit</a>";echo "</td>";	
	}
	
	//echo $count ." ". $row[0];
	//$count++;
	//echo "</span></a></li>";
	
	echo "</tr>";
	
	$count++;
}
echo "<tr>";
$len = sizeof($col_names);
$fields="";

for($i=0;$i<$len;$i++)
	{
		echo "<td>";
		echo "<input type='text' name='".$col_names[$i]."'>";
		echo "</td>";
	}
echo "<input type='hidden' name='form_name' value='".$id."'>";
echo "<td>";
echo "<input type='button' id='add_entry' value='Add Entry' />";
echo "</td>";
echo "</tr>";

echo "</table>";
echo "</form>";

//echo "</ul></li></ul>";
echo "</div></body><html>";

 
?>

</html>