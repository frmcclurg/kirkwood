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
   
   $title = "Ben-Hur";
   $description = "Adding an item to a shopping cart via hidden &lt;input&gt; tags";
   $image = "http://ecx.images-amazon.com/images/I/51XQXQWcX5L._AA115_.jpg";
?>

<!DOCTYPE html>
<html>

<?php
   $headLine = __LINE__;
	$headCode = <<< ENDCODE
<head>
   <title>$title</title>
   
	<script type='text/javascript' 
	        id='googlecart-script' 
	        src='https://checkout.google.com/seller/gsc/v2_2/cart.js?mid=101261440527226' 
	        integration='jscart-wizard' 
	        post-cart-to-sandbox='true' 
	        currency='USD' 
	        productWeightUnits='LB'>
   </script>
</head>
ENDCODE;
	
	printf( "%s", $headCode, false, $headLine );
?>

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
   
<?php
   $bodyLine = __LINE__;
	$bodyCode = <<< ENDCODE
	<div class="product">
	   <input type="hidden" 
	          class="product-title" 
	          value="Ben Hur">
	
	   <input type="hidden" 
	          class="product-image" 
	          value="http://ia.media-imdb.com/images/M/MV5BNzQyOTQ0ODk2NF5BMl5BanBnXkFtZTcwNTkwOTI3MQ@@._V1._SY317_.jpg">
	          
	   <span class="product-price">$29.99</span>
	   
	   <select class="product-attr-custom">
	      <option value="DVD (Jun 1, 2004)" 
	              googlecart-set-product-price="29.99" 
	              selected="selected">
	         DVD (Jun 1, 2004) - $29.99
	      </option>
	      
	      <option value="DVD: 4-Disc Collector Ed (Sep 13, 2005)" 
	              googlecart-set-product-price="27.35">
	         DVD: 4-Disc Collector Ed (Sep 13, 2005) - $27.35
	      </option>
	      
	      <option value="DVD: 50th Anniv Collector's Edition" 
	              googlecart-set-product-price="46.93">
		      DVD: 50th Anniv Collector's Edition - $46.93
		   </option>
		   
		   <option value="Blu-Ray: 50th Anniv Collector's Edition" 
		           googlecart-set-product-price="49.99">
		      Blu-Ray: 50th Anniv Collector's Edition - $49.99
		   </option>
		</select>
		
	   <br><br> <br>
   
	   <div class="googlecart-add-button" 
	        tabindex="0" 
	        role="button" 
	        title="Add to cart">
	   </div>
	</div>
ENDCODE;
	
	printf( "%s", $bodyCode );
   
	printf( "<br><br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript", false, $headLine );

	printf( "<br><br>" );
	PrintCodeSyntaxSnippet( $bodyCode, "html", false, $bodyLine );
?>

</body>
</html>