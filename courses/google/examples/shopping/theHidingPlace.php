<?php
   $title = "The Hiding Place";
   $image = "http://ecx.images-amazon.com/images/I/519BTGNKE6L._AA115_.jpg";
?>
<html>
<head>
   <title><?= $title ?></title>
   
	<script  id='googlecart-script' 
	         type='text/javascript' 
	         src='https://checkout.google.com/seller/gsc/v2_2/cart.js?mid=566350369908768' 
	         integration='jscart-wizard' 
	         post-cart-to-sandbox='false' 
	         currency='USD' 
	         productWeightUnits='LB'>
   </script>
</head>
<body>
   <h1><?= $title ?></h1>
   
   <h2>Description</h2>
   
   <img src="<?= $image ?>" 
        style="float: left;
               margin: 0px 10px 10px 0px;">
   
   <p>
	   Corrie and Betsie ten Boom are middle-aged sisters working in their father's watchmaker shop in 
	   pre-WWII Holland. Their uneventful lives are disrupted with the coming of the Nazis. Suspected 
	   of hiding Jews & caught breaking rationing rules, they are sent to a concentration camp, where 
	   their Christian faith keeps them from despair and bitterness. Betsie eventually dies, but Corrie 
	   survives, and after the war, must learn to love and forgive her former captors.
   </p>
   
   <div class="product">
      <input type="hidden" 
             class="product-title" 
             value="<?= $title ?>">
             
      <input type="hidden" 
             class="product-image" 
             value="<?= $image ?>">
             
      <input type="hidden" 
             class="product-price" 
             value="41.28">
             
      <div class="googlecart-add-button" 
           tabindex="0" 
           role="button" 
           title="Add to cart"></div>
   </div>
</body>
</html>