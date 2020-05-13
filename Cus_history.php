<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<table>
<?php
include_once "connection.php";

//$db_handle = pg_connect("host = localhost dbname=raashan user=postgres password=csl451" ) or die('Could not connect: ' . pg_last_error   ());
$email = $_GET['emailid'];
//$email = $_POST['email'];

$query = "select order_id,name,order_date,status from order_details natural join order_contains natural join products where email = '".$email."';";
//echo $query;
$result = pg_exec($db_handle, $query);


?>
</table>
<!DOCTYPE html>
<html>
<head>
<title>Customer Order History</title>
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
							<li class="in-up"><a href="index.html" class="scroll"> Sign out </a> </li> <!--
							<li><a href="signup.html" class="scroll">Sign up</a> <label>|</label></li> -->
							<!-- <li>
									<select tabindex="4" class="dropdown">
										<option value="" class="label" value="">Currency</option>
										<option value="1">Dollar</option>
										<option value="2">Euro</option>
									</select>
							</li> -->						
						</ul>
				</div>
				<div class="search-top">
					
					
				<div class="clearfix"> </div>
				</div>
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>

						<li><a href="product.html" > Products</a></li>
						<li><a href="contact.html" > Contact </a></li>
					</ul>	
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
			<h6>HOME / <span>History</span></h6>
		</div>
	</div>
		<!--content-- by Naresh>
<!-- 				<br><br><br>		<br><br><br>		<br><br><br>
		<div class="container" align="center" style="width:100% display:table;">
			<div style="display: table-row">
			<div style="width: 100px; display: table-cell;"> Order Id </div>
			<div style="width: 100px;display: table-cell;">Products</div>
			<div style="width: 100px;display: table-cell;">Date</div>
			<div style="width: 100px;display: table-cell;">Status</div>
			</div>
		</div>
		<br><br><br>		<br><br><br>		<br><br><br>
 -->			<!--footer-->

		<div class="container">
			<div class="four">
				<h2>Your Order History</h2><br><br>
<!-- 				<div class="sign">
					<form>
						<div>
							<input type="text" value=" " name="l1" placeholder="Order">
							<input type="text" value=" " name="l2" placeholder="Order Date">
							<input type="text" value=" " name="l3" placeholder="Products">&nsbp;&nsbp
							<input type="text" value=" " name="l4" placeholder="Order status">
						</div>
				</div>
				
 -->
			<div>
				<table class="table">
					<thead>
						<tr>
							<th>OrderID</th>
							<th>Products</th>
							<th>Order Date</th>
							<th>Status</th>
						</tr>
						
						<?php
						$rowcounter = 0;
						$cols = 4;
				while ($row = pg_fetch_row($result)) {
					echo "<form action='modifystatus.php' method='post'>";
					?>
					<input type="hidden" value="<?php echo $email?>" name="email">
					<?php
					echo"<tr>";
					$counter=0;
					while($counter<$cols){	
					?>	
					<td>
  
					<input type="text" value="<?php echo $row[$counter]?>" readonly></td>
					<input type="hidden" value="<?php echo $row[0]?>" name="orderid">
					<?php
					if($counter==3 && $row[3]!="confirm"){
						?>
						<td><input type="submit" value="cancel" ></td>
						<?php
						}
					
					
					
					$counter=$counter+1;
					}
					echo "</tr>";
					//echo "</form>";
					}
					
						?>
						 	
					</thead>
					
					
					
					<!---<tbody>
						<tr>
							<td>12435</td>
							<td>Sugar</td>
							<td>12-5-215</td>
							<td>Received</td>
						</tr>
						<tr>
							<td>12435</td>
							<td>Sugar</td>
							<td>12-5-215</td>
							<td>Received</td>
						</tr>
						<tr>
							<td>12435</td>
							<td>Sugar</td>
							<td>12-5-215</td>
							<td>Received</td>
						</tr>
					</tbody>--->
				</table>
			</div>
				<!-- <h3>404 Error!</h3>
				<a href="#" class="btn  btn-1c">Go Back </a> -->
			</div>
		</div>

 
			<div class="footer">
				<div class="container">
					 <p class="footer-grid"></p>
			 	</div> 	
			</div>

</body>
</html>
