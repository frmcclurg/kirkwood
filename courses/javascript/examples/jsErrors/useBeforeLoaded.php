<?php
   /* test for AJAX load  */
   if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
       strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   	$path = "examples/jsErrors/";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Use Element Before Loaded</title>
   <meta charset="ISO-8859-1">
</head>
<body>

   <h1>Use Element Before Loaded</h1>

<script>
// using element before it is loaded
// make sure DOM is loaded using window.load()
var myImage = document.getElementById( "up" );
console.log( myImage.getAttribute( "src" ) );
</script>

<!-- image should be specified pior to -->
<!-- script if not using window.load() -->
<img src="<?= $path ?>ellieAndCarl.jpg" id="up">

</body>
</html>