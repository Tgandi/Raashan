<html>
<?php include 'connection.php';?>
<?php

///////////////////////////////////////////////////////////////////////
//page for adding into cart////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

	//$customer_id="marn";// email of customer
	//$grocer_mobile="1234567809";
	//$product_id="3";
	session_start();

	$customer_id=$_SESSION['email'];// email of customer
	$grocer_mobile=$_GET['mobile'];
	$product_id=$_GET['product_id'];

	$sql ="SELECT * from cart_b where mobile='".$grocer_mobile."' and email='".$customer_id."'";
	$ret = pg_query($db_handle, $sql);
	$row = pg_fetch_row($ret);
	if(!$row)										// new user cart or cart for same user with diffrent grocer
	{
		$sql1 ="SELECT * from products where product_id='".$product_id."'";
		$ret1 = pg_query($db_handle, $sql1);
		$row = pg_fetch_row($ret1);
		$p_name="";
		$p_name.=$row[1];
		echo $p_name;
		$p_name.=",1";
		$sql2 = "INSERT INTO cart_b (email, mobile, order_placed)VALUES ('".$customer_id."', '".$grocer_mobile."','".$p_name."')";
		$ret2 = pg_query($db_handle, $sql2);
	}
	else										    // already existing cart
	{
		$sql1 ="SELECT * from products where product_id='".$product_id."'";
		$ret1 = pg_query($db_handle, $sql1);
		$p_name="";
		$c="";
		$row = pg_fetch_row($ret1);
		$p_name.=$row[1];
		$c=$row[1];
		//var_dump($row);
		$p_name.=",1";
		$sql2 ="SELECT * from cart_b where mobile='".$grocer_mobile."' and email='".$customer_id."'";
		$ret2 = pg_query($db_handle, $sql2);
		$ord="";
		while($row1 = pg_fetch_row($ret2))
		{
			$pos = strrpos($row1[2], $c);
			if ($pos === false) 
			{ 							
				$ord.=$row1[2];
				$ord.=",";
				$ord.=$p_name;
				$sql3 = "UPDATE cart_b set order_placed='".$ord."' where mobile='".$grocer_mobile."' and email='".$customer_id."'";
				$ret3 = pg_query($db_handle, $sql3);
			}
		}
	}
	pg_close($db_handle);
	header("Location:product.php")
?>
</html>