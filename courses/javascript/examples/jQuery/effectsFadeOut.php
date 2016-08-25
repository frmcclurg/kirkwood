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
   <title>fadeOut() Effects</title>
   <meta charset="ISO-8859-1" />

   <style type="text/css">
      #fadeDiv {
         width: 150px;
         text-align: center;
         border: 4px ridge lightgray;
      }
   </style>
</head>

<body>
<h1>fadeOut() Effects</h1>

<div id="fadeDiv">Click to Fade</div> <p />
<img id="fadeImage" src="<?= $path ?>images/msLogo.png" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
   $( "#fadeDiv" ).click( function() {
      $( "#fadeImage" ).fadeOut( "slow", function() {
         alert( "Fade completed" );  // animation complete
      });
   });
</script>
</body>
</html>
