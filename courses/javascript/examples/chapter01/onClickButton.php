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
   
   $title = "onClick Event Handler";
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
<form>
   <button onclick="alert( 'Ouch! Stop poking me.')">
      Don't Press Me
   </button>
</form>
ENDCODE;

	printf( "%s", $code );
	printf( "<p /><br /><hr />" );
	printf( "<h2>Code Snippet<h2/>" );
	PrintCodeSyntaxSnippet( $code, "html" );
?>

</body>
</html>