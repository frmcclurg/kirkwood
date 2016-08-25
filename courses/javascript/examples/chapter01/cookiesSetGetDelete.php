<?php
/**
 * @file   cookiesCreateReadErase.php
 *
 * @brief  Example of creating, reading and erasing a cookie
 * @author Fred R. McClurg
 * @since  June 5, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );

   $title = "Set, Get and Delete a Cookie";
   $description = "Learn how to create, read and erase cookies";
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
   /**
    * @brief          Sets a cookie and it's expiration
    * @param name     Name of cookie
    * @param value    Value associated with cookie
    * @param expires  Number of days cookie expires
    */
	function setCookie(name, value, expires) 
	{
	   var exp = new Date();  // set new date object
      exp.setTime(exp.getTime() + (1000 * 60 * 60 * 24 * expires));  // set expiration in days

		document.cookie = name + "=" + escape(value) + 
		                  "; path=/" + 
		                  ((expires == null) ? "" : "; expires=" + exp.toGMTString()); 
		                  
		alert( "Cookie: " + name + "\\n" +
		       "Value: " + value + "\\n" +
		       "Expires: " + exp.toGMTString() ); 
	}


   /**
    * @brief          Retrieves the value of specified cookie
    * @param  name    Cookie name
    * @retval retval  Cookie value
    */
	function getCookie(name) 
	{
		var dc = document.cookie;
	   var cname = name + "=";
	   var begin, end;
	   var retval = null;
	
	   if (dc.length > 0) 
	   {
	      begin = dc.indexOf(cname);
	      
	      if (begin != -1) 
	      {
	        begin += cname.length;
	        end = dc.indexOf(";", begin);
	        
	        if (end == -1) 
	        {
		        end = dc.length;
	        }
	        
	        retval = unescape(dc.substring(begin, end));
	      }
	   }
	   
		alert( "Get cookie: " + name +
		       "\\nValue: " + retval ); 
	   
	   return( retval );
	}
	

   /**
    * @brief       Deletes the specified cookie
    * @param name  Cookie name
    */
   function eraseCookie(name)
   {
      // setting value to blank or negative expiration deletes a cookie
      setCookie(name, "", -1);
      
		alert( "Cookie " + name + " deleted" ); 
   }
</script>
<head>
ENDCODE;

	printf( "%s", $headCode );
?>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<p>
   <?= $description ?>
</p>

<?php
	$bodyCode = <<< ENDCODE
<body onLoad="getCookie('myCookie')">

<form>
	<fieldset>
		<input type="button" 
		       value="Set Cookie" 
		       onClick="setCookie('myCookie', this.form.cookieSet.value, 1)">
		       
		<input type="text" 
		       name="cookieSet" 
		       size="30">
	</fieldset>
	       
	<br> <br>
	
	<fieldset>
	
	<input type="button" 
	       value="Get Cookie" 
	       onClick="this.form.cookieGet.value = getCookie('myCookie')">
	       
	<input type="text" 
	       name="cookieGet" 
	       size="30">
	       
	</fieldset>
	
	<br> <br>
	
	<input type="button" 
	       value="Delete Cookie" 
	       onClick="eraseCookie('myCookie')">
</form>

<br> <br>

What is the current contents of 
<a href="javascript:alert('document.cookie is currently:\\n' + document.cookie);">
document.cookie</a>

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
