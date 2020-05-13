


<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Raashan | Cart </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vegetables Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body> 
	  <!--header-->
	<div class="header">
		<div class="container">
			<div class="header-top">			
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=" " ></a>
				</div>
				<div class="search-in">
					<div class="header-grid">
						<ul>
							<li class="in-up"><a href="contact.html" class="scroll">Contact</a> <label>|</label></li>
							<li class="in-up"><a href="signin.php" class="scroll"> Sign in </a> <label>|</label></li>
							<li><a href="signup.php" class="scroll">Sign up</a> <label>|</label></li>
<!-- 							<li>
									<select tabindex="4" class="dropdown">
										<option value="" class="label" value="">Currency</option>
										<option value="1">Dollar</option>
										<option value="2">Euro</option>
									</select>
							</li>						
 -->						</ul>
				</div>
				<!--
				<div class="search-top">
					<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div>
				<!--
					<div class="cart">
					<a href="#" class="cart-in"> </a>
					<span> 5</span>
				</div> 
				<div class="clearfix"> </div>
				</div>-->
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li><a href="product.php" > Products</a></li>
						<li><a href="contact.html" > Contact </a></li>
<!-- 						<li ><a href="about.html">About Us</a></li>
						<li><a href="services.html" > Services </a></li>
						<li><a href="404.html" >Daily Market</a></li>
						<li><a href="blog.html" > Blog </a></li>
 -->					</ul>	
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
				</script>			
				</div>	
				<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<!---->
	<div class="banner-in">
		<div class="container">
			<h6>HOME / <span>Cart</span></h6>
		</div>
	</div>
<!---->
		<!--content-->
		<div class="container">
			<div class="sign">
			
			
<?php include 'connection.php';?>
<?php

///////////////////////////////////////////////////////////////////////
//page for displaying cart, when bucket at the top of the page is////// 
//clicked then the page is redirected here.////////////////////////////
///////////////////////////////////////////////////////////////////////
	session_start();

	$customer_id=$_SESSION['email'];// email of customer

//	$customer_id="marn";// email of customer
	//$grocer_mobile="9989999999";
	$namee="";
	$sql ="SELECT * from cart_b where email='".$customer_id."'";
	$ret = pg_query($db_handle, $sql);
	if(!$ret)
	echo "Nothing has been added to the cart";
	else
	{
		$gc=1;
		while($row = pg_fetch_row($ret))
		{	
			if($gc>1)
			$namee.="-";
			?>
			<table width='800' cellpadding='5' border='2'>
			<?php
			echo "From grocer ".$gc." mobile- ".$row[1];
			$od = explode (",", $row[2]);
			$namee.=$row[1];
			$namee.=",";
			echo "<tr><td>Product Name</td><td>Quantity</td><td>Operations</td></tr>";
			for($i=0; $i<sizeof($od)-1; $i=$i+2)
			{
				echo "<tr><td>".$od[$i]."</td><td>".$od[$i+1]."</td>";
				$j=array($od[$i], $od[$i+1], $customer_id, $row[1]);
				$namee.=$od[$i];
				$namee.=",";	
				$Text = json_encode($j);
				$tt = urlencode($Text);?>
				<td>
				<?php echo "<a href='bh_mod.php?id=".$tt."'>Modify</a>";?>
				or
				<?php echo "<a href='bh_del.php?id=".$tt."'>Delete</a>";?>
				</td>
				</tr>
				<?php
				echo "<br><br>";
			}?>
			</table>
			<?php
			$gc=$gc+1;
		}
	}
	$j1=array($customer_id, $namee);
	$Text = json_encode($j1);
	$tt1 = urlencode($Text);?>
	<form action="b_confirm.php" method="post">
	<input type="hidden" name="id3" value="<?php echo $tt1; ?>">
	<button align="center" type="submit" onclick="b_confirm.php">Confirm Order</button>
	</div>
	</form>
	<?php
	pg_close($db_handle);
?>
			
			</div>
			</div>
			
			<!--footer-->
			<div class="footer">
				<div class="container">
					 <p class="footer-grid"> </p>
			 	</div> 	
			</div>

</body>


</html>