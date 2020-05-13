<html>
<head>
  </head>
<script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
<script src='all_script.js'></script>
 <?php

 $host = "host=localhost";
 $port = "port=5432";
 $dbname = "dbname=raashan";
 $credentials = "user=postgres password=naresh";
 $dbconn = pg_connect("$host $port $dbname $credentials");
  
 if(!$dbconn)
  echo "Db Connection not made<br>";

$id = 'order';
$th = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='order_details'";

$table_headings = pg_query($dbconn, $th);


$count = 1  ;
//echo "<ul><li class='active has-sub'><a href='#'><span>Tables</span></a><ul>";
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

$sql = "SELECT * FROM order_details";

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
    if($col_names[$cot] == 'order_id'){
      echo "<td class='".$col_names[$cot]."'><a href='view_order_contents.php?id=".$var."'>$var</a></td>";
    }
    else{
      echo "<td class='".$col_names[$cot]."'>";echo $var;echo "</td>";
    }
    $cot=$cot+1;
  }
  //var_dump($row);
  echo "<td>";echo "<a href='delete_order.php?id=".$temp['order_id']."' class='del_button'>Delete</a>";echo "</td>";
  
  //echo $count ." ". $row[0];
  //$count++;
  //echo "</span></a></li>";
  
  echo "</tr>";
  
  $count++;
}

echo "</table>";
//echo "</ul></li></ul>";
echo "</div></body><html>";

 
?>

</html>