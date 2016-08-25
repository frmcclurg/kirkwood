<?php
/**
 * @file   datepicker.php
 *
 * @brief  Popup calendar for date selection
 * @author Fred R. McClurg
 * @since  May 26, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );

   $title = "datepicker: Popup calendar for date selection";
   $description = "A popular jQuery UI to allow a user to select a date from a popup calendar";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
	$headCode = <<< ENDCODE
<head>
   <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#datepicker').datepicker({
				inline: true
			});
		});
	</script>
</head>
ENDCODE;

	printf( "%s", $headCode );
?>

<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<h2>
   Purpose
</h2>

<p>
   <?= $description ?>
</p>

<?php
	$bodyCode = <<< ENDCODE
<form>
   <input type="text" id="datepicker"></p>
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
