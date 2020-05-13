<!doctype html>
<?php
//Cache Control
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.

echo <<<Markup
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <link rel='stylesheet' href='styles.css'>
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <script src='jquery-latest.min.js' type='text/javascript'></script>
   <script src='script.js'></script>
   <script src='all_script.js'></script>
   
   <title>Raashan Admin</title>

<style>

body{
  background: #ffffff;
}

.box{
  margin: 100px auto;
  width: 300px;
  height: 50px;
}

.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.container-1 input#search{
  width: 300px;
  height: 50px;
  background: #006699;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
 
   
    -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;
}
.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #ffffff;
  }
 
</style>

</head>
<body>
Markup;


echo <<<Markup
<div class="box">
  <div class="container-1">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." />
  </div>
</div>
Markup;

if(@!$_GET['q_item']){
  echo '<input type="hidden" id="query_item" value="customer" />';
}
else{
  echo '<input type="hidden" id="query_item" value="'.$_GET['q_item'].'" />';
}


echo '<div id="responsecontainer" align="center">';
?>
