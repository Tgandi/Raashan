<html>
<?php include 'connection.php';?>
<?php

///////////////////////////////////////////////////////////////////////
//page for modifying quantity in database////////////////////////////////// 
///////////////////////////////////////////////////////////////////////
	$sql ="SELECT * from cart_b where mobile='".$_POST["groc"]."' and email='".$_POST["cus"]."'";
	$ret = pg_query($db_handle, $sql);
	$ford="";
	while($row = pg_fetch_row($ret))
	{
		$od = explode (",", $row[2]); 
		for($i=0; $i<sizeof($od); $i++)
		{
			if($od[$i]==$_POST["prod"])
			$od[$i+1]=$_POST["n1"];
			$ford.=$od[$i];
			if($i<sizeof($od)-1)
			$ford.=",";
		}
	}
	$sql1 = "UPDATE cart_b set order_placed='".$ford."' where email='".$_POST["cus"]."' and mobile='".$_POST["groc"]."' ";
	$ret1 = pg_query($db_handle, $sql1);
	echo "<div align=\"center\"><strong><u>Record Modified Successfully !!!</u></strong><div><br><br>";
	echo "<div align=\"center\"><strong><u>Click on cart at top to view changes/u></strong><div><br><br>";
	

pg_close($db_handle);
header("Location:bh2.php")
?>
</html>