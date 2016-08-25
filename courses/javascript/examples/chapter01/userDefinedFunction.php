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
   
   $title = "User Defined Function";
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
      // @brief      Example of user defined function and passed parameter
      // @param msg  Message to be passed to alert
      function WhatTimeIsIt( msg )
      {
         var now = new Date();
         var message;
         var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
                       'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ];
         var month = months[ now.getMonth() ];
         
         message = "Raw Date/Time: " + now + "\\n";
         message += "Formatted Date: " + month + " " + 
                                         now.getDay() + ", " + 
                                         now.getFullYear();
         alert( message );
      }  // WhatTimeIsIt()
   </script>
</head>
ENDCODE;
	
	printf( "%s", $headCode );
?>
	
<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<?php
	$bodyCode = <<< ENDCODE
<body onload="WhatTimeIsIt( 'And all is well ...' )">

	Does anybody really know
	<a href="javascript:void(0)"
	   onclick="WhatTimeIsIt( 'Are we there yet?' )">what time it is</a>?
   
</body>
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