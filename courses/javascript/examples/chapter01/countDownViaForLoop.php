<?php
/**
 * @file   countDownViaForLoop.php
 *
 * @brief  Example onClick Event Handler
 * @author Fred R. McClurg
 * @since  May 21, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Countdown via for loop";
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title><?= $title ?></title>
</head>
<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<?php
	$code = <<< ENDCODE
<script>
   // initialize array
   var number = ['zero', 'one', 'two', 'three', 'four', 'five', 
                 'six', 'seven', 'eight', 'nine', 'ten'];
                 
   for ( var i = 10; i > 0; i-- )
   {
      if ( i < 10 )
      {
         // prepend spaces for single digits
	      document.write( "&nbsp;&nbsp;" );
      }
      
      // display the number 10 ... 1
      document.write( i + " &nbsp; " );
      
      // display the string equivalent
      document.write( number[i] + "<br>" );
   }
</script>
ENDCODE;

	printf( "%s", $code );
	printf( "<br> <br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $code, "javascript" );
?>

</body>
</html>