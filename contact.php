<!--  
	  line 116   FORM VALIDATION  --  make sure the form contents are legible and all the fields are filled
-->

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
function send_form()
{
	include_once "connection.php";
	$name = $_POST['Name'];
	$email = $_POST['Email-id'];
	$subject = $_POST['Subject'];
	$message = $_POST['Message'];
	$query = "insert into contact (name, email, subject, message) values ('".$name."','".$email."','".$subject."','".$message."');";
	$result = pg_query($query) or die('Query failed: ' . pg_last_error());
	
	if ($result)
		echo "<script type='text/javascript'>alert('Your query has been submitted');</script>";

}
?>
<html>
<head>
<title>Raashan | Contact </title>
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
				<!--
				<div class="search-top">
					<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div>
					<div class="cart">
					<a href="#" class="cart-in"> </a>
					<span> 5</span>
				</div>
				<div class="clearfix"> </div>
				</div>
				-->
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
					<!--
						<li><a href="product.html" > Products</a></li> -->
						<li class="active"><a href="contact.php" > Contact </a></li>
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
			<h6>HOME / <span>CONTACT</span></h6>
		</div>
	</div>
<!---->
		<!--content-->
		<div class="container">
			<div class="contact">
			<h3>CONTACT FORM</h3>
			<form action="contact.php" method="POST">
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input name='Name' type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
						</div>
						<div class="col-md-6 contact-us">
							<input name='Email-id' type="text" value="Email-id" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						
						<div class="col-md-6 contact-us">
							<input name='Subject' type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea name='Message' cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send ">
						<input type="submit" value="SEND" name='send' >
							<?php
								if($_POST){
									if(isset($_POST['send'])){
										send_form();
									}
								}
								?>
					</div>
				</form>
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