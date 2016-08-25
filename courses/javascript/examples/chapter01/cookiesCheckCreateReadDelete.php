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
   
   $title = "Check, Create, Read, Delete Cookie";
   $description = "If username is stored as a cookie, it will be 
                   displayed upon page load.  Prompt for
                   new username to create.";
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
       * @brief        Retrieves specified cookie value
       * @param cname  Cookie name
       * @return       Value of the cookie
       */
		function ReadCookie(cname)
		{
			var i,x,y;
			var cookies = document.cookie.split(";");
			
			for ( i = 0; i < cookies.length; i++ )
		   {
			   x = cookies[i].substr( 0, cookies[i].indexOf("=") );
			   y = cookies[i].substr( cookies[i].indexOf("=") + 1 );
			   x = x.replace(/^\s+|\s+$/g,"");  // trim string name
			   
			   if ( x == cname )
			   {
			      return unescape(y);
			   }
		   }
		}
		
		
      /**
       * @brief         Store the name of the visitor in a cookie variable
       * @param cname   Name of the cookie
       * @param value   Value of the cookie
       * @param exdays  Number of days until the cookie expires
       */
		function CreateCookie(cname, value, exdays)
		{
			var exdate = new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var cvalue = escape(value) + 
			             ((exdays==null) ? "" : "; expires=" + exdate.toUTCString() );
			
			document.cookie = cname + "=" + cvalue;
		}
		
		
      /**
       * @brief  Displays a welcome message if the cookie is set
       */
		function CheckCookie(cname)
		{
			var username = ReadCookie(cname);
			
			if ( username != null && 
			     username != "" )
			{
			   alert( "Welcome back " + username );
			}
		}
		
		
      /**
       * @brief  Removes specified cookie
       * @param  Cookie name
       */
		function DeleteCookie(cname)
		{
			CreateCookie( cname, "", -1 );
		}
		
		
      /**
       * @brief  Prompts user to enter cookie
       * @param  message  Prompt message
       * @param  cname    Cookie name
       */
		function PromptCookie(message, cname)
		{
			var value = ReadCookie(cname);
			
		   value = prompt( message, value );
			  
			if ( value != null && 
				  value != "" )
			{
			   CreateCookie( cname, value, 1 );
		   }
		}
	</script>
</head>
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
<body onload="CheckCookie('username')">

   <dl>
      <dd> <a href="javascript:void(0)"
		        onClick="PromptCookie('Enter your username', 'username')">
		        Enter Username</a> <br> <br>
		        
      <dd> <a href="javascript:void(0)"
		        onClick="alert( 'Current username: ' + ReadCookie('username') )">
		        Retrieve username</a> <br> <br>
		        
      <dd> <a href="javascript:void(0)"
		        onClick="DeleteCookie('username')">
		        Remove username</a> <br> <br>
		        
      <dd> <a href="javascript:void(0)"
		        onClick="alert('Current document.cookie:\\n' + document.cookie);">
		        Contents of document.cookie</a> <br> <br>
   </dl>
		        
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