<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php 
	include_once "connection.php";
	session_start();
	$email = $_SESSION['email'];
	$query1 = "select * from products;";
	$query2 = "select * from product_department;";
	$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
	$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());
	?>
<html>
<head>
<title>Raashan | Product </title>
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
							<li class="in-up"><a href="contact.php" class="scroll">Contact</a> <label>|</label></li>
							<li class="in-up"><a href="signin.php" class="scroll"> Sign in </a> <label>|</label></li>
							<li><a href="signup.php" class="scroll">Sign up</a> <label>|</label></li>
						</ul>
				    </div>
				<div class="search-top">
					<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div>
				<div class="cart">
					<a href="bh2.php" class="cart-in"> </a>
					
				</div>
				<div class="clearfix"> </div>
				</div>
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active"><a href="product.php" > Products</a></li>
						<li><a href="contact.php" > Contact </a></li>
<!-- 						<li><a href="services.html" > Services </a></li>
						<li><a href="404.html" >Daily Market</a></li>
						<li ><a href="about.html">About Us</a></li>
						<li><a href="blog.html" > Blog </a></li>
 -->				</ul>	
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
	<!---->
	<div class="banner-in">
		<div class="container">
			<h6>HOME / <span>PRODUCTS</span></h6>
		</div>
	</div>
<!---->
			<div class="container">
				<div class="product">
					
				<ul id="filters">
						<li class="active"><span class="filter" data-filter="app card icon logo  web">ALL</span></li>
						<li><span class="filter" data-filter="app">CATEGORY1</span></li>
						<li><span class="filter" data-filter="card">CATEGORY2 </span></li>
						<li><span class="filter" data-filter="icon">CATEGORY3</span></li>
						<li><span class="filter" data-filter="logo">CATEGORY4</span></li>
					</ul>
					<div id="portfoliolist">
					
					
					
            <?php
				while($row = pg_fetch_row($result1)){
				?>
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">		
							<a href="single.php?product_id=<?php echo $row[0]; ?>" class="b-link-stripe b-animate-go  thickbox play-icon">
						  <img class="img-responsive " src="images/<?php echo $row[0]; ?>.jpg" alt="" />
						   
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>							
						</div>
					</div>	

					<?php 
					if ($row = pg_fetch_row($result1)){ ?>
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="single.php?product_id=<?php echo $row[0]; ?>" class="b-link-stripe b-animate-go  thickbox play-icon">
						    <img class="img-responsive " src="images/<?php echo $row[0]; ?>.jpg" alt="" />
						    <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		                </div>
					</div>	
					<?php
					}
					
					
					
					if ($row = pg_fetch_row($result1)){ ?>
					
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="single.php?product_id=<?php echo $row[0]; ?>" class="b-link-stripe b-animate-go  thickbox play-icon">
						     <img class="img-responsive " src="images/<?php echo $row[0]; ?>.jpg" alt="" />
						      <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		                </div>
					</div>	
				<?php	
				}
				}
			?>
					
<!--					
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">		
							<a href="single.php" class="b-link-stripe b-animate-go  thickbox play-icon">
						  <img class="img-responsive " src="images/p1.jpg" alt="" />
						   
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>							
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="single.php" class="b-link-stripe b-animate-go  thickbox play-icon ">
						    <img class="img-responsive" src="images/p2.jpg" alt=""  />
						    <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		                </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="single.php" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p3.jpg"  alt="" />
						      <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		                </div>
					</div>	
					
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">		
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p4.jpg" alt=""  />
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		                </div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">		
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p1.jpg" alt=""  />
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		                </div>
					</div>			
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p2.jpg" alt=""  />
						    <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		               </div>
					</div>
					<div class="portfolio logo mix_all " data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">		
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p3.jpg" alt=""  />
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		               </div>
					</div>
					<div class="portfolio logo mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p4.jpg" alt=""  />
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		               </div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper port">		
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="images/p1.jpg" alt=""  />
						     
						     <ul class="social-ic">
								<li class="down"><span> </span></li>
								<li class="in-search"><span> </span></li>
							</ul>
							</a>
		               </div>
					</div>
-->
					<div class="clearfix"> </div>
					</div>	
			<!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
			<!-- Gallery Script Ends -->

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