<?php
/**
 * @file   login.php
 *
 * @brief  Example login transaction
 * @author Fred R. McClurg
 * @since  June 23, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Encryped crypt() Account Login";
   $description = "If a username of \"fred\" and a password of \"derf\" is entered, the user
                   will be logged in successfully.";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>

	<style>
	   th
	   {
	      text-align: right;
	      font-weight: normal;
	   }
	</style>
</head>

<body>
<h1 style="text-align: center;">
   <?= $title ?>
</h1>
   
<p>
   <?= $description ?>
</p>

<body>
   <form method="get"
         action="<?= $_SERVER['PHP_SELF'] ?>" >
	   <table cellspacing="5">
	      <tr>
	         <th>
			      Username:
	         </th>
	         <td>
			      <input type="text" name="username"> <br>
	         </td>
	      </tr>
	      <tr>
	         <th>
			      Password:
	         </th>
	         <td>
			      <input type="password" name="password"> <br>
	         </td>
	      </tr>
	      <tr>
	         <td colspan="2" align="center">
			      <input type="submit" name="login" value="Login"> <br>
	         </td>
	      </tr>
	   <table>
   </form>

<?php
   // encrypted password stored in database
   $password = "derf";
   $salt = "1234";
   $encrypted = crypt( $password, $salt );
   printf( "<p>\$crypt('%s', '%s') encrypted length: %d<br>Value: %s</p>", 
   		  $password, $salt,
   		  strlen( $encrypted ), 
   		  $encrypted );
   
   if ( isset( $_REQUEST['username'] ) && 
   	  isset( $_REQUEST['password'] ) )
   {
	   if ( ( $_REQUEST['username'] == "fred" ) && 
	   	  ( crypt( $_REQUEST['password'], $salt ) == $encrypted ) )
	   {
	   	printf( "<p>Login was successful.</p>" );
	   }
	   else
	   {
	   	printf( "<p>Username and password do not match.</p>" );
	   }
   }
   else
   {
   	// user has not attempted login
   	printf( "<p>Please enter username and password for login.</p>" );
   }
   
	printf( "<br><br><br><hr>" );
	printf( "<h2>Code Listing</h2>" );
	PrintCodeSyntaxFile( pathinfo( $_SERVER['PHP_SELF'], PATHINFO_BASENAME ), "PHP" );
?>

</body>
</html>