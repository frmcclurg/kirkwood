<?php
/**
 * @file   index.php
 *
 * @brief  Table of contents regarding demos
 * @author Fred R. McClurg
 * @since  June 09, 2012
 */

   $title = "Google Shopping Demos";
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
	   
	<h2>
	   Local Documentation
	</h2>
	   
	<dl>
	   <dt> <a href="tableShoppingCart.php">
	           Order items displayed in table</a>
		   <dd> Several items arranged in a table similar to Google's Shopping Cart Demo (below) <br><br>
		   
	   <dt>
		   <dd> <br><br>
	</dl>

	<hr> <br><br>
	
	<h2>
	   Google Documentation
	</h2>
	   
	<dl>
	   <dt> <a href="https://checkout.google.com/seller/gsc/v2/demo"
	           target="_blank">
	           Google Checkout Shopping Cart Demo</a>
		   <dd> Features several items with options and a shopping cart <br><br>
		   
			<br><br>
			
	   <dt> <a href="https://developers.google.com/checkout/developer/Google_Checkout_Basic_HTML_Sandbox" 
	           target="_blank">
	           Google checkout sandbox</a>
		   <dd>  In order to implement a Google shopping cart, you must set up a Google Merchant Account.  The following steps are for creating a sandbox account you can use for testing.
		   
	</dl>

</body>
</html>