<?php
/**
 * @file   tableShoppingCart.php
 *
 * @brief  Google shopping cart example
 * @author Fred R. McClurg
 * @since  June 09, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Pretty Decent Movies";
   $description = "Example of adding several items to shopping cart via &lt;div&gt; tag.";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
   $headLine = __LINE__;
	$headCode = <<< ENDCODE
<head>
	<script type="text/javascript"
	   id="googlecart-script" 
      src="http://checkout.google.com/seller/gsc/v2_2/cart.js?mid=801947958809860"
      currency="USD"
      post-cart-to-sandbox="true">
   </script>
	
	<style type="text/css">
      .product-image { border: solid 1px #ccc; }
      .product-title, .product-price, .product-shipping { font-weight: bold; }
      .data-cell { padding: 0px 50px 0px 10px; border: solid 0px #fff; vertical-align: top; }
      .align-cart { padding-left: 480px; }
	</style>
</head>
ENDCODE;
	
	printf( "%s", $headCode, false, $headLine );
	
   $bodyLine = __LINE__;
	$bodyCode = <<< ENDCODE
<body>
   <div id="googlecart-widget" 
        class="align-cart">
   </div>
   
   <!-- body content here -->
</body>
ENDCODE;
   
	printf( "%s", $bodyCode, false, $bodyLine );
?>
	
<body>
	<h1 style="text-align: center;">
	   <?= $title ?>
	</h1>
	   
	<p>
	   <?= $description ?>
	</p>

<table border="1"
       cellspacing="0"
       callpadding="7">
   <tr style="background-color: #99CCFF">
      <th>
         product-image
      </th>
      <th>
         product-title
      </th>
      <th>
         product-price
      </th>
      <th>
         product-shipping
      </th>
      <th>
         googlecart-add-button
      </th>
   </tr>
   
<?php
   $bodyLine = __LINE__;
	$bodyCode = <<< ENDCODE
   <tr class="product">
      <td>
         <img class="product-image" 
              src="http://ecx.images-amazon.com/images/I/51XQXQWcX5L._AA115_.jpg">
      </td>
      <td>
	      <a href="benHur.php">
	         <div class="product-title">
		         Ben-Hur (DVD): 50th Anniversary Edition
	         </div>
	      </a> 
	      
	      Starring Stephen Boyd, Jack Hawkins, Charlton Heston, et al. (Feb 7, 2012)
      </td>
      <td>
         Price:
         <div class="product-price">
            $46.93
         </div>
      </td>
      <td>
         Shipping: 
         <div class="product-shipping">
            $6.00
         </div>
      </td>
      <td>
         <div role="button" 
              alt="Add to cart" 
              tabindex="0" 
              class="googlecart-add-button">
         </div>
      </td>
   </tr>
ENDCODE;
	
	printf( "%s", $bodyCode );
	
?>
   <tr class="product">
      <td>
         <img class="product-image" 
              src="http://ecx.images-amazon.com/images/I/518ZG0X6SYL._AA115_.jpg">
      </td>
      <td>
	      <a href="treasuresOfTheSnow.php">
	         <div class="product-title">
		         Treasures of the Snow (DVD): A Story of Friendship and Forgiveness
	         </div>
	      </a>
		      
		   (2003)
      </td>
      <td>
         Price:
         <div class="product-price">
            $30.50
         </div>
      </td>
      <td>
         Shipping: 
         <div class="product-shipping">
            $6.00
         </div>
      </td>
      <td>
         <div role="button" 
              alt="Add to cart" 
              tabindex="0" 
              class="googlecart-add-button">
         </div>
      </td>
   </tr>

   <tr class="product">
      <td>
         <img class="product-image" 
              src="http://ecx.images-amazon.com/images/I/519BTGNKE6L._AA115_.jpg">
      </td>
      <td>
	      <a href="theHidingPlace.php">
	         <div class="product-title">
		         The Hiding Place (DVD)
	         </div>
	      </a> 
		      
	      Starring Jeanette Clift, David de Keyser, John Gabriel, et al. (Feb 26, 2008)
      </td>
      <td>
         Price:
         <div class="product-price">
            $41.09
         </div>
      </td>
      <td>
         Shipping: 
         <div class="product-shipping">
            $6.00
         </div>
      </td>
      <td>
         <div role="button" 
              alt="Add to cart" 
              tabindex="0" 
              class="googlecart-add-button">
         </div>
      </td>
   </tr>

   <tr class="product">
      <td>
         <img class="product-image" 
              src="http://ecx.images-amazon.com/images/I/51SW84A28WL._AA115_.jpg">
      </td>
      <td>
		   <a href="theCountOfMonteCristo.php">
	         <div class="product-title">
		         The Count of Monte Cristo
	         </div>
	      </a>
		         
		   Starring Jim Caviezel, Guy Pearce, Richard Harris and James Frain (Sep 10, 2002) 
      </td>
      <td>
         Price:
         <div class="product-price">
            $24.99
         </div>
      </td>
      <td>
         Shipping: 
         <div class="product-shipping">
            $6.00
         </div>
      </td>
      <td>
         <div role="button" 
              alt="Add to cart" 
              tabindex="0" 
              class="googlecart-add-button">
         </div>
      </td>
   </tr>
</table>

<br><br> <br>
   
<h2>Google Examples</h2>
   
	<dl>
	   <dt> In order to implement a Google shopping cart, you must set up a Google Merchant Account.  
	        The following steps are for creating a sandbox account you can use for testing.
	
			<dd> <a href="https://developers.google.com/checkout/developer/Google_Checkout_Basic_HTML_Sandbox" 
	              target="_blank">
	              Google checkout sandbox</a>
		<br><br>
	
	<br><br> 
      <dt> This page used the Google Store Demo for development.
         <dd> <a href="http://checkout.google.com/seller/gsc/v2/demo/index.html"
                 target="_blank">
                 Google Stores - Demo Store</a>
   
<?php
	printf( "<br><br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript", false, $headLine );

	printf( "<br><br>" );
	PrintCodeSyntaxSnippet( $bodyCode, "html", false, $bodyLine );
?>
   
</body>
</html>