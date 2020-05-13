<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Raashan | Grocer Signup </title>
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
    
    <script> 
        locno=0;
        itemno=0;
   
 function passwordConfirmation(password2){
			var password = document.getElementById('pwd');
			alert(password.value);
			
			if(password.value!==password2)
			{alert("wrong password");
				}
		}
		function confirmPhone(value){
		
			if(value.length!=10){
				alert("phone is of inappropriate length ");
				}
				if(value[1]!=9&&value[1]!=8&&value[1]!=7)
				{alert("Mobile no invlaid");
				}
			}
			
function add(ids) {
//window.alert("sb");
//Create an input type dynamically.

var i=loc;
//Assign different attributes to the element.
    if (ids=="loc")
    {var addr = [" Street: ", " Area: ", " City: "," State: "];
     var fids=["street","area","city","state"]
     var num=4;
     var sno=locno;
    }
    else if (ids=='item')
    { var addr=[" Product_id: "," Max Quanity: "," Unit_Price: "];
      var fids =["pid","maxq","unitp"];
      var num= 3;
      var sno=itemno;
    }
  // var ids="loc"
   
   //window.alert(ids);
    var foo = document.getElementById(ids);
    
/*element.setAttribute("type", "text");
element.setAttribute("value", "");

element.setAttribute("style", "width:200px");*/

    for (i=0;i<num;i++){
        var content = document.createTextNode(addr[i]);
//foo.innerHTML = foo.innerHTML + addr[i];
foo.appendChild(content);
var element = document.createElement("input");
element.setAttribute("name", fids[i]+sno.toString());
element.setAttribute("type", "text");
element.setAttribute("value", "");
element.setAttribute("style", "width:200px");
foo.appendChild(element);
    }
var br = document.createElement("br");
foo.appendChild(br);}
</script>
    
    
    
    
    
    
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
							<li class="in-up"><a href="signin.html" class="scroll"> Sign in </a> <label>|</label></li>
							<li><a href="signup.html" class="scroll">Sign up</a> <label>|</label></li>
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
					<a href="#" class="cart-in"> </a>
					<span> 5</span>
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
			<h6>HOME / <span>SIGNUP</span></h6>
		</div>
	</div>
<!---->
		<!--content-->
		<div class="container">
			<div class="sign">
			<h3>GROCER SIGNUP</h3>
			<form action='gcheck.php' method=post>
				<div>
					<label>Shop Name</label>
					<input type="text" value="" name='name'>
				</div>
                <div>
					<label>Shop Number</label>
					<input type="text" value="" name='shopno'>
				</div>
				<div>
					<label>Mobile Number</label>
					<input type="text" value="" name='phone' onblur="confirmPhone(value)">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name = 'pwd'>
				</div>
				<div>
					<label>Confirmation</label>
					<input type="password"  name='cpwd' onblur="passwordConfirmation(value)">
				</div>
				<div id = "gaddr">
					<label>Address</label>
					Street : <input type="text" name='street' size="35">
                    City: <input type="text" name='city'><br>
                    State: <input type="text" name='state'>
				</div>
                <div id="loc">
                    <br>
                    <label>Servicable Locations</label>
                </div>
                
				<a  class="btn  btn-1c" onclick="add('loc');locno++;">Add Location</a><br><br>
                <div id="item">
                    <br>
                    <label>Items</label>
                </div>
                
				<a  class="btn  btn-1c" onclick="add('item');itemno++">Add Items</a><br>
                
					<input type="submit" value="SUBMIT" name="up">		
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