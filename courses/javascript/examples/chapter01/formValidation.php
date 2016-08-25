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
   
   $title = "Client Side Form Validation";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>
   
<?php
	$headCode = <<< ENDCODE
<head>
   <script type="text/javascript">
      // @brief             Display a right or wrong alert message and the value
      // @param  isCorrect  Status of error message
      // @param  message    Message from calling function`
      // @param  value      Value from calling function
      function DisplayDialog( isCorrect, message, value )
      {
         var note;

         if ( isCorrect )
         {
			   note = "Congratulations!";
         }
         else
         {
			   note = "Idiot!";
         }
            
         alert( note + " " + message + ": " + value );
      }  // DisplayDialog()
      
      
      // @brief          Display an error message if passed argument is not a number
      // @param  number  Number to validate
      // @retval match   Returns true if a positive integer.  
      //                 Otherwise returns false.
      function ValidateInteger( value )
      {
         var pattern = /^\d+$/;
         var regex = new RegExp( pattern );
         var isMatch;
         
         if ( regex.test( value ) )
         {
			   isMatch = true;
			   message = "That's correct.";
         }
         else
         {
			   isMatch = false;
			   message = "Not a positive integer.";
         }
            
         DisplayDialog( isMatch, message, value );
         
         return( isMatch );
      }  // ValidateInteger()
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
	<form>
	   Enter a positive integer:<br />
	   <input type="input" name="number" 
	          onblur="ValidateInteger( form.number.value )" />
	</form>
ENDCODE;

	printf( "%s", $bodyCode );
	
	printf( "<p /><br /><hr />" );
	printf( "<h2>Code Snippet<h2/>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript" );

	printf( "<p />" );
	PrintCodeSyntaxSnippet( $bodyCode, "html" );
?>

</body>
</html>