<html>
<?php include 'connection.php';?>
<!--<input type="hidden" name="relation" value="<?php //echo $_REQUEST['id']; ?>">-->
<?php
///////////////////////////////////////////////////////////////////////
//confirmation page///////////////////////////////////////////////////// 
///////////////////////////////////////////////////////////////////////

	$Text = urldecode($_REQUEST['id3']);
	$a = json_decode($Text);
	$tot=explode("-",$a[1]);
	$idd=0;
	for($i=0; $i<sizeof($tot); $i=$i+1)
	{
		$items=explode(",",$tot[$i]);
		$sql ="SELECT * from order_details ";
		$ret = pg_query($db_handle, $sql);
		while($row = pg_fetch_row($ret))
		$idd=$row[0];
		$idd=$idd+1;
		$d=date("Y-m-d");
		$d2="Delvered";
		$d3="0";
		$sql1 = "INSERT INTO order_details (order_id, email, mobile, order_date, status, points_used, amount)VALUES ('".$idd."', '".$a[0]."',$items[0],'".$d."','delivering','".$d3."','".$d3."')";
		$ret1 = pg_query($db_handle, $sql1);
		//for($j=1; $j<sizeof($items); $j=$j+1)
		//{
			$sql3 ="SELECT * from cart_b where mobile='".$items[0]."' and email='".$a[0]."'";
			$ret3 = pg_query($db_handle, $sql3);
			$row3 = pg_fetch_row($ret3);
			$it= explode (",", $row3[2]);
			for($k=0; $k<sizeof($it); $k=$k+2)
			{
				$sql4 ="SELECT * from products where name='".$it[$k]."'";
				$ret4 = pg_query($db_handle, $sql4);
				$row4 = pg_fetch_row($ret4);
				//var_dump($row4);
				$sql2 = "INSERT INTO order_contains (order_id, product_id, quantity)VALUES ('".$idd."', '".$row4[0]."','".$it[$k+1]."')";
				$ret2 = pg_query($db_handle, $sql2);
			}
		//}
	}
	echo " <div align=\"center\"><strong><u>order Successfull !!!</u></strong><div><br><br>";
	header("refresh:1;url=product.php");    
?>
</html>