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
    
    <script> 
        locno=0;
        itemno=0;
   
function add(ids) {

//Assign different attributes to the element.
    if (ids=="loc")
    {var addr = [" Street: ", " Area: ", " City: "," State: "];
     var fids=["street","area","city","state"]
     var num=4;
     var sno=locno;
    }
    else if (ids=="items")
    { 
        var addr=[" Product_id: "," Max Quanity: "," Unit_Price: "];
      var fids =["pid","maxq","unitp"];
      var num= 3;
      var sno=itemno;
    }
  // var ids="loc"
   
  
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
    
    
    
    <?php 
session_start();
if (isset($_SESSION['mnum']))
{$mobnum=$_SESSION['mnum'];}
elseif (isset($_POST['mnum']))
    $mobnum = $_POST['mnum'];
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
						<form action='gcheck.php' method='POST'>
                        
<?php
if (isset($_POST['edit']))
{
					echo"<div class=\"disp\">
                            
                        <input type=hidden name ='orgmno' value=".$mobnum."> </input>
                        <label><span>Name </span>     <input type=text value= ".$arr[1]." name='sname'> </input>  </label>
                        <label> <span>Mobile </span>  <input type=text value= ".$arr[0]." name='mobile'> </input>  </label>
                        <label> <span>Shop No </span> <input type=text value= ".$arr[2]." name='sno'> </input>  </label>
                        <label> <span>Street </span>  <input type=text value= ".$arr[3]." name='street'> </input>  </label>
                        <label> <span>City  </span>  <input type=text value= ".$arr[4]." name='city'> </input>  </label>
                        <label> <span>State </span>  <input type=text value=".$arr[5]." name='state'> </input>  </label>
                        <input type=\"submit\" value=\"Save\" class=\"btn btn-lc\" name='edit_profile' >
                        
                        </div>";
  
}

if (isset($_POST['add_loc']))
{
     echo "<label> <span>Servicable </span> <span>Locations</span> </label>";

    echo "<div class=\"disp\" style=\"width:150%;\">";
    $i=0;
  echo "<input type=text value=".$mobnum." name='orgmno'></input>";  
while ($locs=pg_fetch_row ($result))
{

echo "<form action='gcheck.php' method='POST' >";
//echo "<input type=text value=".$mobnum." name='orgmno'></input>";
echo "<label> Street  <input type=text style='width:150px;' value=".$locs[1]." name= \"street\"".$i." readonly > 
</input> Area  <input type=text style='width:150px;'value= ".$locs[2]." name=\"area\"".$i." readonly > </input>
City  <input type=text style='width:150px;'value=".$locs[3]." name=\"city\"".$i." readonly > </input>
State <input type=text style='width:150px;' value=".$locs[4]." name=\"state\"".$i." readonly > </input>
<input type=\"submit\" value=\"Delete\" class=\"btn btn-lc\" name='delete' >
</form>
</label>";

} 
    
echo "<div id='loc' class=\"disp\"> </div>";
echo"<a  style = \"float:right;\" class=\"btn  btn-1c\" onclick=\"add('loc');locno++;\">Add Location</a><br><br>"; 
echo "<input type=\"submit\" value=\"Save\" class=\"btn btn-lc\" name='add_loc' style =\"float:left;\">
</form>";
echo "</div>";
    
    
}



elseif (isset($_POST['add_item']))
{
    $query='select * from grocer_has where mobile='.$mobnum.";";
$result=pg_query($conn,$query);
     echo "<label> <span>Items </span> <span>Available: </span> </label>";

    echo "<div class=\"disp\" style=\"width:150%;\">";
    $i=0;
echo "<input type=hidden value=".$mobnum." name='orgmno'></input>";
    
while ($locs=pg_fetch_row ($result))
{

echo "<form action='gcheck.php' method='POST' >";
echo "<label> Product_ID  <input type=text style='width:150px;' value=".$locs[1]." name= \"pid\"".$i." > 
</input> Max.Qty  <input type=text style='width:150px;'value= ".$locs[2]." name=\"maxq\"".$i." > </input>
Unit Price  <input type=text style='width:150px;'value=".$locs[3]." name=\"unitp\"".$i."  > </input>
<input type=\"submit\" value=\"Delete\" class=\"btn btn-lc\" name='delete_item' >
</form>
</label>";

} 
    
echo "<div id=\"items\"> </div>
                
<a  style = \"float:right;\" class=\"btn  btn-1c\" onclick=\"add('items');itemno++\">Add Items</a><br>"; 
echo "<input type=\"submit\" value=\"Save\" class=\"btn btn-lc\" name='add_item' style =\"float:left;\">
</form>";
echo "</div>";
    
    
    
    
}

elseif (isset($_POST['orders']))
{
$query='select * from order_details where mobile='.$mobnum.";";
$result=pg_query($conn,$query);

 echo "<table class=\"table\" style=\"padding-top:5em\">";
echo "<br><br><br><br>";
echo "<tr>
<td> order_id </td>
<td> email </td>
<td> mobile </td>
<td> order_date </td>
<td> status </td>
<td> points_used </td>
<td> amount </td>
</tr>";

while ($ord=pg_fetch_row ($result))
{
 echo "<tr>";
echo "<td>$ord[0]</td>
<td>$ord[1]</td>
<td>$ord[2]</td>
<td>$ord[3]</td>
<td>$ord[4]</td>
<td>$ord[5]</td>
<td>$ord[6]</td> ";
echo "</tr>";
}
//echo "<br>";

echo "</table>";


}


?>
</div>

                  
                    

				</div>
                
                
                  <div class="four2" style=" display: table-cell;">
					<!--<a href="#" class="btn  btn-1c">Edit Your Profile</a><br><br>
					<a href="#" class="btn  btn-1c">View Your Orders</a><br><br>
					<a href="#" class="btn  btn-1c">Add Locations</a><br><br>
					<a href="#" class="btn  btn-1c">Add Items</a><br><br>-->
                      
<!--                    <input type="submit" value="SAVE" class="btn btn-lc" name='edit_profile'>-->
                      
                      
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