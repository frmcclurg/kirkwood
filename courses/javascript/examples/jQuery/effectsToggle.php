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
   <title>toggle() Effects</title>
   <meta charset="ISO-8859-1" />

   <style type="text/css">
      #toggleDiv {
         width: 150px;
         text-align: center;
         border: 4px groove gray;
      }
   </style>
</head>

<body>
<h1>toggle() Effects</h1>

<div id="toggleDiv">Click to Toggle</div> <p />
<img id="toggleImage" src="<?= $path ?>images/tux.png" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
   $( "#toggleDiv" ).click( function() {
      $( "#toggleImage" ).toggle( "slow", function() {
         alert( "Toggle completed" );  // animation complete
      });
   });
</script>
</body>
</html>
