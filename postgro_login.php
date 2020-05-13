<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Raashan | Postgrocer Login </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
    
    <?php 
session_start();
$mobnum=$_SESSION['mnum'];
    ?>
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
<!--							<li class="in-up"><a href="contact.html" class="scroll">Contact</a> <label>|</label></li>-->
                            <li> <img src="images/co.png" style="width=30px; height:30px"> </img> </li>
                            <li class="in-up"><a href="postgro_login.php" class="scroll"> <?php echo $mobnum; ?> </a> <label>|</label></li>
							<li class="in-up"><a href="gcheck.php" class="scroll"> Sign Out </a> <label>|</label></li>
							<!-- <li><a href="signup.html" class="scroll">Sign up</a> <label>|</label></li> -->
						</ul>
				</div>
				<div class="search-top">
					<!--
					<div class="search">
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
						<li><a href="product.html" > Products</a></li>
						<li><a href="contact.html" > Contact </a></li>
<!-- 						<li ><a href="about.html">About Us</a></li>
						<li><a href="services.html" > Services </a></li>
						<li class="active"><a href="404.html" >Daily Market</a></li>
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
			<h6>HOME / <span>grocer page</span></h6>
		</div>
	</div>
		<!--content-->
		
		<div class="container" style="width:100% display:table;">
			<!-- <h2>Welcome Grocer</h2> -->
			<div class="four" style="display: table-row">
				
                
<?php 

$conn_string = "host=localhost port=5432 dbname=raashan user=postgres password=naresh";
$conn = pg_connect($conn_string);
$query='select * from grocer where mobile='.$mobnum.";";
$result=pg_query($conn,$query);
$arr=pg_fetch_array ($result);
$query='select * from services where mobile='.$mobnum.";";
$result=pg_query($conn,$query);
//$locs=pg_fetch_row ($result);
?>
                
				
                <div class="four1" style="display: table-cell;">
					<div class="form-ro">
						<form action='postgro_login_edit.php' method='POST'>
						<div class="disp">
                        <label><span>Name </span>     <input type=text value= <?php echo $arr[1]; ?> readonly > </input>  </label>
                        <label> <span>Mobile </span>  <input type=text value= <?php echo $arr[0]; ?> name="mnum" readonly > </input>  </label>
                        <label> <span>Shop No </span> <input type=text value= <?php echo $arr[2]; ?> readonly > </input>  </label>
                        <label> <span>Street </span>  <input type=text value= <?php echo $arr[3]; ?> readonly > </input>  </label>
                        <label> <span>City  </span>  <input type=text value= <?php echo $arr[4]; ?> readonly > </input>  </label>
                        <label> <span>State </span>  <input type=text value= <?php echo $arr[5]; ?> readonly > </input>  </label>
<label> <span>Servicable </span> <span>Locations:</span> </label>
                        </div>
<div class="disp" style="width:150%;">
    
<?php 
$i=0;
while ($locs=pg_fetch_row ($result))
{

//echo "<label> Street  <input type=text value=".$locs[1]." readonly > 
//</input> Area  <input type=text value= ".$locs[2]." readonly > </input>
//City  <input type=text value=".$locs[3]." readonly > </input>
//State <input type=text value=".$locs[4]." readonly > </input>
//</label>";
//    
echo "<label> Street  <input type=text value=".$locs[1]." name=street".$i." readonly > 
</input> Area  <input type=text value= ".$locs[2]." name=area".$i."  readonly > </input>
City  <input type=text value=".$locs[3]." name=city".$i."  readonly > </input>
State <input type=text value=".$locs[4]." name=state".$i." readonly > </input>
</label>";
    
    $i=$i+1;

}?>  
</div>	

<label><span>Items Available:</span></label>
 <?php 
$query='select * from grocer_has where mobile='.$mobnum.";";
$result=pg_query($conn,$query);
echo "<div class=\"disp\" style=\"width:150%;\">";
    
   
$i=0;
while ($locs=pg_fetch_row ($result))
{

//echo "<label> Street  <input type=text value=".$locs[1]." readonly > 
//</input> Area  <input type=text value= ".$locs[2]." readonly > </input>
//City  <input type=text value=".$locs[3]." readonly > </input>
//State <input type=text value=".$locs[4]." readonly > </input>
//</label>";
//    
echo "<label> Prod_no  <input type=text value=".$locs[1]." name=pid".$i." readonly > 
</input> Max. Qty  <input type=text value= ".$locs[2]." name=maxq".$i."  readonly > </input>
Unit Price  <input type=text value=".$locs[3]." name=unitp".$i."  readonly > </input>
</label>";
    
    $i=$i+1;

}?> 
    
</div>	

</div>

                  
                    

				</div>
                
                
                  <div class="four2" style=" display: table-cell;">
					<!--<a href="#" class="btn  btn-1c">Edit Your Profile</a><br><br>
					<a href="#" class="btn  btn-1c">View Your Orders</a><br><br>
					<a href="#" class="btn  btn-1c">Add Locations</a><br><br>
					<a href="#" class="btn  btn-1c">Add Items</a><br><br>-->
                      
                    <input type="submit" value="Edit Your Profile" class="btn btn-lc" name='edit'>
                      <br><br><br>
                      <input type="submit" value="View Your Orders" class="btn btn-lc" name='orders'>	
                      <br><br><br>
                      <input type="submit" value="Add Locations" class="btn btn-lc" name='add_loc'>	
                      <br><br><br>
                      <input type="submit" value="Add Items" class="btn btn-lc" name='add_item'>
                      </form>
				</div>
				
				<!--
				<h3>404 Error!</h3>
				<a href="#" class="btn  btn-1c">Go Back </a>-->
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