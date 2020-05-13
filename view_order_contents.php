<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Raashan | Signin </title>
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
						
				</div>
			</div>	
			<div class="clearfix"> </div>
			</div>
			<div class="header-bottom-bottom">
				<div class="top-nav">
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
			<h6>HOME / <span>Admin</span></h6>
		</div>
	</div>
<!---->
		<!--content-->

		
                 <?php

				 $host = "host=localhost";
				 $port = "port=5432";
				 $dbname = "dbname=raashan";
				 $credentials = "user=postgres password=naresh";
				 $dbconn = pg_connect("$host $port $dbname $credentials");
				  
				 if(!$dbconn)
				  echo "Db Connection not made<br>";

				$id = pg_escape_string($_GET['id']);
				$th = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='order_contains'";

				$table_headings = pg_query($dbconn, $th);


				$count = 1  ;
				//echo "<ul><li class='active has-sub'><a href='#'><span>Tables</span></a><ul>";
				echo "<table class=\"table\">";
				echo "<tr>";

				//echo $table_headings[2];
				//echo $table_headings[3];

				$col_names=array();
				$count=0;
				while($row = pg_fetch_assoc($table_headings))
				  {
					echo "<td>";
					echo $row['column_name'];
					$col_names[$count]=$row['column_name'];
					echo "</td>";
					$count+=1;
				  }
				echo "</tr>";

				$sql = "SELECT * FROM order_contains where order_id ='".$id."'";

				$result = pg_query($dbconn, $sql);
				if (!$result) {
					die("Error in fetching all table names " . pg_last_error());
				}

				$count=1;
				while ($row = pg_fetch_assoc($result)) {  
				  echo "<tr id='".$count."'>";
				  //echo "<li>"."<a href='#'><span>";
					$temp = $row;
				  $cot=0;
				  foreach($temp as $var)
				  {
					echo "<td class='".$col_names[$cot]."'>";echo $var;echo "</td>";
					$cot=$cot+1;
				  }
				  //var_dump($row) 
				  //echo $count ." ". $row[0];
				  //$count++;
				  //echo "</span></a></li>";
				  
				  echo "</tr>";
				  
				  $count++;
				}

				echo "</table>";
				//echo "</ul></li></ul>";
				echo "</div></body><html>";

				 
				?>

		
			<!--footer-->
			<br><br><br><br>
			<div class="footer">
				<div class="container">
					 <p class="footer-grid"> </p>
			 	</div> 	
			</div>


</body>
</html>

