<?php
   /* test for AJAX load  */
   if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
       strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   	$path = "examples/jQuery/";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>"Hello World" via jQuery()</title>
   <meta charset="ISO-8859-1">

   <link rel="stylesheet" type="text/css"
         href="<?= $path ?>css/style.css">
</head>

<body>
<h1>"Hello World" via jQuery()</h1>

<div id="divBlock"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>

<script type="text/javascript">
   // jQuery( "div#divBlock" ).html( "Hello World" );
   $( "div#divBlock" ).html( "Hello World" );
</script>
</body>
</html>
