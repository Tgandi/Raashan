<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 

    
$db_handle = pg_connect("host = localhost dbname=raashan user=postgres password=naresh" ) or die('Could not connect: ' . pg_last_error   ());

session_start();

if(isset($_POST['signup'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$housenumber = $_POST['housenumber'];
$street = $_POST['street'];
$city=$_POST['city'];
$state = $_POST['state'];
$query="insert into customer values('".$email."','".$name."','".$phone."','".$housenumber."','".$street."','".$city."','".$state."','".$password."');";
//echo $query;
$result1 = pg_exec($db_handle, $query);
}

if(isset($_POST['signin'])){

$email = $_POST['email'];
$_SESSION['email']=$_POST['email'];   // check dis
//echo $_SESSION['email'];
$password = $_POST['password'];



//echo $_SESSION['email'];
$query = "select * from customer where email='".$email."' and password='".$password."';";
$result = pg_exec($db_handle, $query);
$rows = pg_num_rows($result);
if($rows==0){
	header("Location:signin.php");
	}	 


$result1 = pg_exec($db_handle, "select name from customer where email='".$email."'and password='".$password."';");
$name = pg_fetch_row($result1,0)[0];
$result2 = pg_exec($db_handle, "select house_no from customer where email='".$email."'and password='".$password."';");
$housenumber = pg_fetch_row($result2,0)[0];
$result3 = pg_exec($db_handle, "select street from customer where email='".$email."'and password='".$password."';");
$street = pg_fetch_row($result3,0)[0];
$result4 = pg_exec($db_handle, "select city from customer where email='".$email."'and password='".$password."';");
$city = pg_fetch_row($result4,0)[0];
$result5 = pg_exec($db_handle, "select state from customer where email='".$email."'and password='".$password."';");
$state = pg_fetch_row($result5,0)[0];

}	
if(!isset($_POST['signup'])&&!isset($_POST['signin']))
{
	$emailNew = $_GET['email'];
	//echo $emailNew;
	$email=$emailNew;
	$result1 = pg_exec($db_handle, "select name from customer where email='".$email."';");
$name = pg_fetch_row($result1,0)[0];
$result2 = pg_exec($db_handle, "select house_no from customer where email='".$email."';");
$housenumber = pg_fetch_row($result2,0)[0];
$result3 = pg_exec($db_handle, "select street from customer where email='".$email."';");
$street = pg_fetch_row($result3,0)[0];
$result4 = pg_exec($db_handle, "select city from customer where email='".$email."';");
$city = pg_fetch_row($result4,0)[0];
$result5 = pg_exec($db_handle, "select state from customer where email='".$email."';");
$state = pg_fetch_row($result5,0)[0];
	//echo "hi";
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Raashan | Customer Post login page</title>
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
							<li class="in-up"><a href="index.html" class="scroll"> Sign out </a> </li><!--
							<li><a href="signup.html" class="scroll">Sign up</a> <label>|</label></li>-->
												
						</ul>
				</div>
				<div class="search-top">
					<!--
					<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				    </div>-->
					<div class="cart">
					<a href="bh2.php" class="cart-in"> </a>
					<!--<span> 5</span>-->
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
						<li><a href="product.php" > Products</a></li>
						
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
			<h6>HOME / <span>Customer Page</span></h6>
		</div>
	</div>
		<!--content-->
			<br><br><br>		<br><br><br>		<br><br><br>
		<div class="container" style="width:100% display:table;">
			<div style="display: table-row">
			<div style="width: 600px; display: table-cell;">
				 <ul style="list-style: none;">
					 
				  <li ><button type="button" class="btn btn-1c"   name="CheckOrderHistory" onclick="location.href='Cus_history.php?emailid=<?php echo $email?>'">Check Order History</button></li><br>
                
				 <li ><button type="button" class="btn btn-1c" onclick="editProfile()">Edit Profile</button></li><br>
				
				 <li ><button type="button" class="btn btn-1c" onclick="location.href = 'product.php';">Buy Products</button></li><br>
				 <li >Points</button></li><br>
				 </ul>
			</div>

			<form method="post" action ="update.php"
			<div style="display: table-cell;">
				 <ul style="list-style: none;">
				 <li id="name">Name:<input type="text" value="<?php echo $name;?>" id="username" name="NAME" readonly></li><br>
				 <li id="email">Email-Id:<input type="text" value="<?php echo $email;?>" id="useremail" readonly></li><br>
				 <li id="housenumber">House Number:<input type="text" value="<?php echo $housenumber;?>" id = "userhousenumber" readonly></li><br>
				 <li id="street">Street:<input type="text" value="<?php echo $street;?>" id="userstreet" name="userstreet" readonly></li><br>
				 <li id="city">City:<input type="text" value="<?php echo $city;?>" id="usercity" name="usercity" readonly></li><br>
				 <li id="state">State:<input type="text" value="<?php echo $state;?>" id="userstate" name="userstate" readonly></li><br>
				 <li><input type="submit" value="Save" name = "Save" onclick="showSavedProfile()"></li>
				 <input type="hidden" value="<?php echo $email;?>" name="originalemail">
				 </ul>	
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

<script>
	function editProfile(){
	
	
	   var name = document.getElementById('name');
	   var username=document.getElementById('username');
		var s=name.innerHTML;
		alert(s);
		var x = username.value;
		s = "Name : <input value='"+x+"' type='text' name='username'>";
	//	alert(s);
		name.innerHTML=s;
		
		var email = document.getElementById('email');
	   var useremail=document.getElementById('useremail');
		var s=name.innerHTML;
		//alert(s);
		var x = useremail.value;
		s = "Email-Id : <input value='"+x+"' type='text' name='useremail'>";
	//	alert(s);
		email.innerHTML=s;
		
		 var housenumber = document.getElementById('housenumber');
	   var userhousenumber=document.getElementById('userhousenumber');
		var s=housenumber.innerHTML;
		//alert(s);
		var x = userhousenumber.value;
		s = "House Number : <input value='"+x+"' type='text' name='userhousenumber'>";
	//	alert(s);
		housenumber.innerHTML=s;
		
		var street = document.getElementById('street');
	   var userstreet=document.getElementById('userstreet');
		var s=street.innerHTML;
		//alert(s);
		var x = userstreet.value;
		s = "Street : <input value='"+x+"' type='text' name='userstreet'>";
	//	alert(s);
		street.innerHTML=s;
		
		var city = document.getElementById('city');
	   var usercity=document.getElementById('usercity');
		var s=city.innerHTML;
		//alert(s);
		var x = usercity.value;
		s = " City: <input value='"+x+"' type='text' name='usercity'>";
	//	alert(s);
		city.innerHTML=s;
		
		var state = document.getElementById('state');
	   var userstate=document.getElementById('userstate');
		var s=state.innerHTML;
		//alert(s);
		var x = userstate.value;
		s = "State : <input value='"+x+"' type='text' name='userstate'>";
	//	alert(s);
		state.innerHTML=s;
		
		// var name1 = document.getElementById('name');
		 //alert(name1.innerHTML);
		 
		}
		
		
	
		
		
</script>

</body>
</html>
