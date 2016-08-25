<?php 
   /* test for AJAX load  */
   if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
       strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   	$path = "examples/eventHandling/";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Image hover with onmouseover() and onmouseout()</title>
   <meta charset="ISO-8859-1">
</head>
<body>
   <h1>Image hover with onmouseover() and onmouseout()</h1>

<img src="<?= $path ?>images/lightRight.png" id="trainLight">

<script>
   var imgObj = document.getElementById( "trainLight" );

   imgObj.onmouseover = function() {
      imgObj.setAttribute( "src", "<?= $path ?>images/lightLeft.png" );
   };

   imgObj.onmouseout = function() {
      imgObj.setAttribute( "src", "<?= $path ?>images/lightRight.png" );
   };
</script>
</body>
</html>
