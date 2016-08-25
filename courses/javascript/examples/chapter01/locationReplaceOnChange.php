<?php
/**
 * @file   locationReplaceOnChange.php
 *
 * @brief  Jump to URL upon selecting dropdown list item.
 * @author Fred R. McClurg
 * @since  May 26, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Location Replace via dropdown onChange Event";
   $description = "Location redirection via dropdown onChange event";
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
      // @brief         Change (redirect) location of the current page
      // @param  url    URL of the target page
      function RedirectPage( url )
      {
         window.location.assign( url );
      }  // RedirectPage()
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
	   URL Redirection:<br>
	   <select onChange="RedirectPage( this.value )">
	      <option value="">
	         Select location
	      </option>
	      
	      <option value="http://www.google.com">
	         Google (Search engine, gmail, groups, and more)
	      </option>
	      
	      <option value="http://www.w3schools.com">
	         w3schools (Learn HTML, CSS, JavaScript, and more)
	      </option>
	      
	      <option value="http://www.gty.org">
	         Grace to You (3,000 sermons online, daily devotionals, etc.)
	      </option>
	   </select> 
	</form>
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