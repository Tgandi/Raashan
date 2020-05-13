<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Raashan | Home</title>
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
					<a href="index.html"><img src="images/logo.png" alt=" " ></a>   <!-- Logo for raashan to be created -->
				</div>
				<div class="search-in">
					<div class="header-grid">
						<ul>
							<li class="in-up" ><a href="contact.php" class="scroll">Contact</a> <label>|</label></li>
							<li class="in-up" ><a href="signin.php" class="scroll"> Sign in </a> <label>|</label></li>
							<li ><a href="signup.php" class="scroll">Sign up</a> <label>|</label></li>
							<!-- <li >
									<select tabindex="4" class="dropdown">
										<option value="" class="label" value="">Currency</option>
										<option value="1">Dollar</option>
										<option value="2">Euro</option>
									</select>
							</li> -->						
						</ul>
					</div>
				</div>
				<div class="search-top">
					<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
					</div>
					<div class="cart">
						<a href="#" class="cart-in"> </a>
						
						<!-- <span> 5</span> -->
					</div>
					<div class="clearfix"> </div>
				</div>
					
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
					    <li><a href="product.php" > Products </a></li>
						<li><a href="contact.php" > Contact </a></li>
						<!-- 
						<li ><a href="about.html">About Us</a></li>
										
						<li><a href="services.html" > Services </a></li>
					
						<li><a href="404.html" >Daily Marke</a></li>
						<li><a href="blog.html" > Blog </a></li> -->
						<li><form action="product.html">
<!-- 					    <li><input type="text" name="Location" value="" placeholder="Location for guest user"><br></li>
 -->						<!-- <li><div class="input-group">
							<span class="input-group-addon" id="basic-addon1">@</span>
							<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
						</div></li>
						<li><input class="btn btn-default" type="submit" value="Submit"></li> -->
						<li style="float:right">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
 									<button class="btn btn-1c" type="submit">Go!</button> 
								</span>
							</div>
						</li>
						</form></li>
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
	<div class="banner">
	<!--slider-script-->
		<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
				  $("#slider").responsiveSlides({
					auto: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				  });
				});
			</script>
			<!--//slider-script-->
				<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider">
			        <li>
			          <img src="images/banner.jpg" alt="" />
					  <div class="banner-matter">
						<div class="price">
						  <h2>We Got Every Grocer  in Your price</h2>
						  </div>

					  </div>
			        </li>
			        <li>
			          <img src="images/banner2.jpg" alt="" />
					  <div class="banner-matter">
						 <div class="price">
						  <h2>We Got Every Grocer  in Your price</h2>
						  </div>

					  </div>
			        </li>
			        <li>
			          <img src="images/banner.jpg" alt="" />
					  <div class="banner-matter">
						 <div class="price">
						  <h2>We Got Every Grocer  in Your price</h2>
						  </div>

					  </div>
			        </li>
			      </ul>
			    </div>
			</div>				
			<!-- //slider-->
			<!--content-->
			<div class="content">
				<div class="container">
				<div class="top-content">
								
				    <div class="content-top">
					<!---                    --->
					
<?php include 'connection.php';

///////////////////////////////////////////////////////////////////////
//page for displaying cart, when bucket at the top of the page is////// 
//clicked then the page is redirected here.////////////////////////////
///////////////////////////////////////////////////////////////////////
//	session_start();

//	$customer_id=$_SESSION['email'];// email of customer

	$customer_id="nareshnk@iitrpr.ac.in";// email of customer
	//$grocer_mobile="9490784114";
	
	$sql ="SELECT * from cart_b where email='".$customer_id."'";
	$ret = pg_query($db_handle, $sql);
	
	if(!$ret)
	echo "Nothing has been added to the cart";
	else
	{
		$gc=1;
		while($row = pg_fetch_row($ret))
		{	
			?>
			<table width='800' cellpadding='5' border='2'>
			<?php
			echo "From grocer ".$gc." mobile- ".$row[1];
			$od = explode (",", $row[2]); 
			echo "<tr><td>Product Name</td><td>Quantity</td><td>Operations</td></tr>";
			for($i=0; $i<sizeof($od)-1; $i=$i+2)
			{
				echo "<tr><td>".$od[$i]."</td><td>".$od[$i+1]."</td>";
				$j=array($od[$i], $od[$i+1], $customer_id, $row[1]);
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
			}
			$gc=$gc+1;
		}
	}
	pg_close($db_handle);

	?>
	

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