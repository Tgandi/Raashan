


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
			<!--content-->
			<div class="content">
				<div class="container">
				<div class="top-content">
								
				    <div class="content-top">
					<!---                    --->
					
					<?php include 'connection.php';?>
<form action="bh_add.php" method="post">
<!--<input type="hidden" name="relation" value="<?php //echo $_REQUEST['id']; ?>">-->
<?php
///////////////////////////////////////////////////////////////////////
//page for editing quantity//////////////////////////////////////////// 
///////////////////////////////////////////////////////////////////////

	$Text = urldecode($_REQUEST['id']);
	$a = json_decode($Text);
	?>
	<div align="center">
	<table width='400' cellpadding='5' border='2'>
	<tr><td>Quantity of <?php echo $a[0];?></td><td><input type="text" name="n1" value=" <?php echo $a[1];?> " ></td></tr>
	</table>
	<br>
	<input type="submit" value="Save">
	</div>
	<?php
	pg_close($db_handle);
?>
<input type="hidden" name="prod" value="<?php echo $a[0] ?>">
<input type="hidden" name="cus" value="<?php echo $a[2] ?>">
<input type="hidden" name="groc" value="<?php echo $a[3] ?>">
</form>

<!--         --->
					<div class="clearfix"> </div>
					</div>
					</div>
				</div>
				<!---->
				<!--
					 <div class="content-bottom-top">
						<div class="wmuSlider example1">
							   <div class="wmuSliderWrapper">
								   <article style="position: absolute; width: 100%; opacity: 0;">
								   	<div class="content-bottom">
										<div class="container">
											<span class="corn"> </span>
											<h3>Do you Know  ?</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
										</div>
									</div>
								 	</article>
								 	 <article style="position: absolute; width: 100%; opacity: 0;">
								 	 		<div class="content-bottom">
										<div class="container">
											<span class="corn corn-in"> </span>
											<h3>Do you Know  ?</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
										</div>
									</div>
								 	</article>
								 	 <article style="position: absolute; width: 100%; opacity: 0;">
								 	 		<div class="content-bottom">
										<div class="container">
											<span class="corn"> </span>
											<h3>Do you Know  ?</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
										</div>
									</div>
								 	</article>
								 </div>
				            <script src="js/jquery.wmuSlider.js"></script> 
							  <script>
				       			$('.example1').wmuSlider();         
				   		     </script> 	           	         
					</div>
					</div>-->
		</div>

			<!--footer-->
			
			<div class="footer">
				<div class="container">
					 <p class="footer-grid"> </p>
			 	</div> 	
			</div>
			
</body>
</html>