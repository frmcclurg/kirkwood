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
   <title>"Hello World" via JavaScript</title>
   <meta charset="ISO-8859-1">

   <link rel="stylesheet" type="text/css"
         href="<?= $path ?>css/style.css">
</style>
</head>

<body>
<h1>"Hello World" via JavaScript</h1>

<div id="divBlock"></div>

<script>
   var theDiv = document.getElementById( "divBlock" );
   theDiv.innerHTML = "Hello World";
</script>
</body>
</html>
