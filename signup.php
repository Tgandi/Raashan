<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Raashan | Signup </title>
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
							<!-- <li>
									<select tabindex="4" class="dropdown">
										<option value="" class="label" value="">Currency</option>
										<option value="1">Dollar</option>
										<option value="2">Euro</option>
									</select>
							</li>-->						
						</ul>
				</div>
				<div class="search-top">
					<!--<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div> -->
				<!--
					<div class="cart">
					<a href="#" class="cart-in"> </a>
					<span> 5</span>
				</div> -->
				<div class="clearfix"> </div>
				</div>
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
					<!--
						<li><a href="product.html" > Products</a></li>
						<li><a href="contact.html" > Contact </a></li>
					-->
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
	<!----
	<div class="banner-in">
		<div class="container">
			<h6>HOME / <span>CONTACT</span></h6>
		</div>
	</div> -->
<!---->
		<!--content-->
		<div class="container">
			<div class="sign">
			<h3>SIGNUP</h3>
			<form  method="post" action="cust_postlogin.php" >
				<script src="js/signupcheck.js"></script>
				<div>
					<label>Name</label>
					<input type="text" value="" name="name" id="qw">
				</div>
				<div>
					<label>Email</label>
					<input type="email" value="" name="email"  onblur=" email_check(value)" >
		           <!-- <input type="text" value="" name="email"  onblur="return email_check(value)" >
					-->
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password" id="pw">
				</div>
				<div>
					<label>Confirmation</label>
					<input type="password" name="confirmPassword" onblur="passwordConfirmation(value)">
				</div>
				
				<div>
					<label>Phone</label>
					<input type="text" name="phone" onblur="confirmPhone(value)">
				</div>
				<div>
					<label>House Number</label>
					<input type="text" name="housenumber">
				</div>
				<div>
					<label>Street</label>
					<input type="text" name="street">
				</div>
				<div>
					<label>City</label>
					<input type="text" name="city">
				</div>
				<div>
					<label>State</label>
					<input type="text" name="state">
				</div>

				<input type="submit" value="submit" name="signup" >		
				</form>
				</div>
			</div>

				<!----
			<div class="map-top">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833" ></iframe>
				</div>
					<div class="address">
						<h5>Address</h5>
						<p>Lipsum street, Georgia
							Newyork</p>
						<a href="mailto:info@mycompany.com" class="company">info@mycompany.com</a>
					</div>
			</div> -->
			<!--footer-->
			<div class="footer">
				<div class="container">
					 <p class="footer-grid"> </p>
			 	</div> 	
		</div>


</body>
</html>

