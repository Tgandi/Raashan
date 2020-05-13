<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php 
	include_once "connection.php";
	$product_id = $_GET['product_id'];
	$query3 = "select * from products where product_id='".$product_id."';";
	//$query1 = "select * from customers where email='".$email_id."';";
	$query1 = "select * from customer where email='nareshnk@iitrpr.ac.in';";
	$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
	$result3 = pg_query($query3) or die('Query failed: ' . pg_last_error());
	$row3 = pg_fetch_row($result3);
	$row1 = pg_fetch_row($result1);
	$query2 = "select * from grocer_has natural join grocer natural join services where product_id='".$product_id."' and street='".$row1[4]."' and city='".$row1[5]."' and state='".$row1[6]."' ;";
	$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());
	?>
	
<html>
<head>
<title>Raashan | Single </title>
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
							<li><a href="cust_signout.php" class="scroll">Sign out</a> <label>|</label></li>
						</ul>
				</div>
				<div class="search-top">
					<!-- <div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div> -->
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
						<li><a href="product.html" > Products</a></li>
						<li><a href="contact.html" > Contact </a></li>
<!-- 						<li><a href="services.html" > Services </a></li>
						<li ><a href="about.html">About Us</a></li>
						<li><a href="404.html" >Daily Market</a></li>
						<li class="active"><a href="blog.html" > Blog </a></li>
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
	<!---->
	<div class="banner-in">
		<div class="container">
			<h6>HOME / <span>SINGLE PRODUCT</span></h6>
		</div>
	</div>
<!---->
			<div class="container">
				<div class="single">
				<div class="blog-top-in">
					<div class="col-md-4 top-blog">
						<a href="#"><img class="img-responsive" src="images/<?php echo $row3[0]; ?>.jpg" alt=" " ></a>
					</div>
					<div class="col-md-8 sed-in">
						<h4><?php 
							echo $row3[1];
							?>
						</h4>						
							<ul>
								<!--<li><a href="#"><span><i> </i>Super user</span></a></li>
		  						 <li><span><i class="clock"> </i>June 14, 2013</span></li>		  						 	
		  						 <li><span><i class="hit"> </i>Hits:145</span></li>-->
								 <li><span>Category - <?php echo $row3[2]; ?></span></li>
		  					</ul>		  						
						<p><?php echo $row3[3];?> </p>
					</div>
					<div class="clearfix"> </div>
				</div>
<!--				<p class="at-in">Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit justo, in ven e natis purus pretium sit amet. Praesent lectus tortor, tincidu nt in consectetur vestibulum, ultrices nec neque. Praesent nec sagittis mauris. Fusce convallis nunc neque. Integer egestas aliquam interdum. Nulla ante diam, interdum nec tempus eu, feugiat vel erat. Integer aliquam mi quis accum san porta.
						Quisque nec turpis nisi. Proin lobortis nisl ut orci euismod, et lobortis est scelerisque. Sed eget volutpat ipsum. </p>	
-->						
<!--						
				<div class="comment-grid-top">
			<h3>4 Responses</h3>
			<div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="" />
				</div>
				<div class="top-comment-right">
					<ul>
						<li><span class="left-at"> Admin</span></li>
						<li><span class="right-at">12 July 2014 at 10.30am</span></li>
						<li><a class="reply" href="#">REPLY</a></li>
					</ul>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="comments-top-top top-grid-comment">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="" />
				</div>
				<div class="top-comment-right">
					<ul>
						<li><span class="left-at"> Admin</span></li>
						<li><span class="right-at">12 July 2014 at 10.30am</span></li>
						<li><a class="reply" href="#">REPLY</a></li>
					</ul>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="comments-top-top top-grid-comment">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="" />
				</div>
				<div class="top-comment-right">
					<ul>
						<li><span class="left-at"> Admin</span></li>
						<li><span class="right-at">12 July 2014 at 10.30am</span></li>
						<li><a class="reply" href="#">REPLY</a></li>
					</ul>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="" />
				</div>
				<div class="top-comment-right">
					<ul>
						<li><span class="left-at"> Admin</span></li>
						<li><span class="right-at">12 July 2014 at 10.30am</span></li>
						<li><a class="reply" href="#">REPLY</a></li>
					</ul>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	
			<div class="leave-comment">
				<h3>comments</h3>
				<div class="table-form">
					<form action="#" method="post" name="post_comment">
				<div>
				<label>Name<span>*</span></label>
					<input type="text" value=" ">
				</div>
				<div>
					<label>Email<span>*</span></label>
					<input type="text" value=" ">
				</div>
				<div>
					<label>Your Comment<span>*</span></label>
					<textarea> </textarea>	
				</div>
				</form>
					<input type="submit" value="submit">		
			</div>
		</div>
		</div>			
	</div>
			
-->			

		<table border=5 >
			<tr>
				<th> Grocer </th>
				<th> Avg Rating </th>
				<th> Unit Price </th>
				<th> Max Quantity </th>
				<th>   </th>
			</tr>
			<?php 

				while($row = pg_fetch_array($result2)){ ?>
					<tr>
						<td> <a href='grocer.php?mobile=<?php echo $row[0];?>' > <?php echo $row[4];?> </td>
						<td> <?php echo $row[9];?> </td>
						<td> <?php echo $row[3];?> </td>
						<td> <?php echo $row[2];?> </td>
						<td> <a href='bh1.php?product_id=<?php echo $row[4];?>&mobile=<?php echo $row[0]; ?>' > Buy </a> </td>;
					</tr>
					
				<?php } ?>
				
			</table>
		

			<!--footer-->			
			<div class="footer">
				<div class="container">
					 <p class="footer-grid"> </p>
			 	</div> 	
			</div>

</body>
</html>