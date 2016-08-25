<?php
/**
 * @file   onClickButton.php
 *
 * @brief  Example onClick Event Handler
 * @author Fred R. McClurg
 * @since  May 19, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Global and Static Variables";
?>
<!DOCTYPE html>
<html>

<?php
	$headCode = <<< ENDCODE
<head>
   <title>$title</title>
   
   <script>
      var globalCount = 0;
      
      // @brief      Example of user defined function and passed parameter
      // @param msg  Message to be passed to alert
      function dialogue(msg)
      {
         globalCount++;
         
         if ( typeof arguments.callee.count == 'undefined' ) 
         {
            arguments.callee.count = 0;
         }
         
         arguments.callee.count++;
         
         if ( typeof dialogue.counter == 'undefined' ) 
         {
            dialogue.counter = 0;
         }
         
         dialogue.counter++;
         
         message = msg + ": &nbsp; Global: " + globalCount +
	         " &nbsp; Static: " + dialogue.counter +
	         " &nbsp; arguments.callee: " + arguments.callee.count +
	         "<br>";
	         
         document.write( message );
      }  // dialogue
   </script>
</head>
ENDCODE;
	
	printf( "%s", $headCode );
?>
	
<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<?php
	$bodyCode = <<< ENDCODE
<script>
   dialogue( 'one' );
   dialogue( 'two' );
   dialogue( 'three' );
</script>
ENDCODE;

	printf( "%s", $bodyCode );
	
	printf( "<br> <br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript" );

	printf( "<br> <br>" );
	PrintCodeSyntaxSnippet( $bodyCode, "html" );
?>

</body>
</html>