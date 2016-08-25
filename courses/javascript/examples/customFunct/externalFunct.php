<?php
   /* test for AJAX load  */
   if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
       strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   	$path = "examples/customFunct/";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>External Functions</title>
   <meta charset="ISO-8859-1">
</head>
<body>
   <h1>External Functions</h1>

   <p> Note: This script uses the JavaScript Console.
   You will need to enable it to display the results. </p>

<script src="<?= $path ?>js/externalFunct.js"></script>

<script>
   var num = increment( 3 );
   console.log( num );
</script>

</body>
</html>