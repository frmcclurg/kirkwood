<?php
/**
 * @file   helloWorldAlert.php
 *
 * @brief  Hello World via Alert
 * @author Fred R. McClurg
 * @since  May 19, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Hello World via Alert";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>
<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<?php
$code = <<< ENDCODE
<script>
   alert( "Hello world!" );
</script>
ENDCODE;

	printf( "%s", $code );
	printf( "<p /><br /><hr />" );
	printf( "<h2>Code Snippet<h2/>" );
	
	PrintCodeSyntaxSnippet( $code, "javascript" );
?>

</body>
</html>