<?php
/**
 * @file   requiredFields.php
 *
 * @brief  Example function that checks if a field is blank.
 *         If the field is blank an alert is displayed and
 *         the function returns false and the form will 
 * @author Fred R. McClurg
 * @since  May 19, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Required Fields";
   $script = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
	$headLine = __LINE__;
	$headCode = <<< ENDCODE
<head>
   <script type="text/javascript">
      /**
       * @brief             Display a right or wrong alert message and the value
       * @param  isCorrect  Status of error message
       * @param  message    Message from calling function`
       * @param  value      Value from calling function
       */
      function RequiredField( value )
      {
         status = true;
         
			if ( value == null || value == "" )
			{
				alert("First name is required.");
			   status = false;
		   }
		   
		   return( status );
	   }
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
	$bodyLine = __LINE__;
	$bodyCode = <<< ENDCODE
	<form name="myForm" 
	      action="javascript:alert('Form was submitted!')" 
	      onSubmit="return RequiredField( document.forms['myForm']['fname'].value );" 
	      method="get">
	      
      First name: <input type="text" name="fname">
      
      <span style="color: red;">*</span>
      
      <br> <br>
      
      <input type="submit" value="Submit"> <br>
      
      <br> <br>
      
      <div style="color: red;
                  text-align: right">
         * field is required
      </div>
   </form>
ENDCODE;

	printf( "%s", $bodyCode );
	
	printf( "<br> <br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript", false, $headLine );

	printf( "<br> <br>" );
	PrintCodeSyntaxSnippet( $bodyCode, "html", false, $bodyLine );
?>

</body>
</html>