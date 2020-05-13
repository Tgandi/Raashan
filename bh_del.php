<html>
<?php include 'connection.php';?>
<form action="bh_d.php" method="post">
<!--<input type="hidden" name="relation" value="<?php //echo $_REQUEST['id']; ?>">-->
<?php
///////////////////////////////////////////////////////////////////////
//page for deleting product//////////////////////////////////////////// 
///////////////////////////////////////////////////////////////////////

	$Text = urldecode($_REQUEST['id']);
	$a = json_decode($Text);
	?>
	<div align="center">
	Are you sure to delete <?php echo $a[0];?> from the cart!!!!!!!!!!!!!
	<br>
	<input type="submit" value="delete">
	</div>
	<?php
	pg_close($db_handle);
?>
<input type="hidden" name="prod" value="<?php echo $a[0] ?>">
<input type="hidden" name="cus" value="<?php echo $a[2] ?>">
<input type="hidden" name="groc" value="<?php echo $a[3] ?>">
</form>
</html>