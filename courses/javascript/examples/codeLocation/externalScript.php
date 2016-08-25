<?php
   /* test for AJAX load  */
   if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
       strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   	$path = "examples/codeLocation/";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>External Script</title>
   <meta charset="ISO-8859-1">
</head>
<body>
   <h1>External Script</h1>

<script src="<?= $path ?>js/external.js">
</script>
</body>
</html>