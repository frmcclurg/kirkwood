<?php
/**
 * @file   tablesorter.php
 *
 * @brief  Sort table rows via column header
 * @author Fred R. McClurg
 * @since  May 26, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );

   $title = "tablesorter: Sort table rows via column header";
   $description = "A popular jQuery plugin to allow a user to change the sort order of a table";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
	$headCode = <<< ENDCODE
<head>
	<link rel="stylesheet" href="jquery-plugin/themes/blue/style.css" type="text/css" media="print, projection, screen" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<script type="text/javascript" src="jquery-plugin/jquery.tablesorter.js"></script>

	<script type="text/javascript">
		$(document).ready(function()
		{
	      $("#movieTable").tablesorter();
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
<table id="movieTable" class="tablesorter">
   <thead>
   <tr>
      <th>Movie</th>
      <th>Year</th>
      <th>Rating</th>
      <th>Genre</th>
      <th>Stars</th>
   </tr>
   </thead>
   <tbody>
      <tr>
         <td>Courageous</td>
         <td>2011</td>
         <td>PG-13</td>
         <td>Drama</td>
         <td>6.2</td>
      </tr>
      <tr>
         <td>Galaxy Quest</td>
         <td>1999</td>
         <td>PG</td>
         <td>Sci-Fi</td>
         <td>7.2</td>
      </tr>
      <tr>
         <td>Hiding Place, The</td>
         <td>1975</td>
         <td>PG</td>
         <td>Drama</td>
         <td>7.3</td>
      </tr>
      <tr>
         <td>Horton Hears a Who!</td>
         <td>2008</td>
         <td>G</td>
         <td>Animation</td>
         <td>7.0</td>
      </tr>
      <tr>
         <td>Road to Redemption</td>
         <td>2001</td>
         <td>PG</td>
         <td>Comedy</td>
         <td>5.7</td>
      </tr>
   </tbody>
</table>
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
