<?php
/**
 * @file   benHur.php
 *
 * @brief  Google shopping cart example
 * @author Fred R. McClurg
 * @since  June 09, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Google Checkout API";
   
   $description = "One method of purchasing an item through Google Store via hidden fields. <br><br>
                   The page 
                   <a href='https://developers.google.com/checkout/developer/interactive_demo'
                      target='_blank'>
                      Interactive Code Demo of Checkout API</a> 
                   should help you get started building this form";
   
   $image = "http://ecx.images-amazon.com/images/I/51XQXQWcX5L._AA115_.jpg";
?>

<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<body>
   <h1><?= $title ?></h1>
   
   <h2>Description</h2>
   
   <img src="<?= $image ?>" 
        style="float: left;
               margin: 0px 10px 10px 0px;">
   
   <p>
      When a Jewish prince is betrayed and sent into slavery by a Roman friend, he regains his freedom 
      and comes back for revenge. 
   </p>
   
   <br><br>
   
<?php
   $bodyLine = __LINE__;
	$bodyCode = <<< ENDCODE
<form method="POST" 
      action="https://sandbox.google.com/checkout/api/checkout/v2/checkoutForm/Merchant/101261440527226" 
      accept-charset="utf-8">
      
   <!-- Sell physical goods and services with possible tax and shipping -->
   <input type="hidden" 
          name="item_name_1" 
          value="Ben-Hur DVD: 50th Anniv Collector's Edition">
   
   <input type="hidden" 
          name="item_description_1" 
          value="Box set, Collector's Edition, Color, Dolby, DVD, NTSC, Original recording remastered, Restored">
   
   <input type="hidden" 
          name="item_price_1" 
          value="46.93">
   
   <input type="hidden" 
          name="item_currency_1" 
          value="USD">
   
   <input type="hidden" 
          name="item_quantity_1" 
          value="1">
   
   <input type="hidden" 
          name="item_merchant_id_1" 
          value="B0054I14PI">

   <!-- No tax code -->

   <!-- Using Flat-rate Shipping -->
   <input type="hidden"
          name="ship_method_name_1"
          value="Standard Shipping">

   <input type="hidden"
          name="ship_method_price_1"
          value="1.99">

   <input type="hidden"
          name="ship_method_currency_1"
          value="USD">

   <input type="hidden"
          name="ship_method_name_2"
          value="Two Day Shipping">

   <input type="hidden"
          name="ship_method_price_2"
          value="5.99">

   <input type="hidden"
          name="ship_method_currency_2"
          value="USD">

   <input type="hidden"
          name="ship_method_name_3"
          value="One Day Shipping">

   <input type="hidden"
          name="ship_method_price_3"
          value="8.99">

   <input type="hidden"
          name="ship_method_currency_3"
          value="USD">

   <input type="hidden" name="_charset_">

   <!-- Button code -->
   <input type="image"
          name="Google Checkout"
          alt="Fast checkout through Google"
          src="http://sandbox.google.com/checkout/buttons/checkout.gif?merchant_id=101261440527226&w=180&h=46&style=white&variant=text&loc=en_US"
          height="46"
          width="180">
</form>
ENDCODE;
	
	printf( "%s", $bodyCode );
   
	printf( "<br><br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $bodyCode, "javascript", false, $bodyLine );
?>

</body>
</html>