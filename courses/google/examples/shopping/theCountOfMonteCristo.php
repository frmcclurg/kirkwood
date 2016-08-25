<?php
   $title = "The Count of Monte Cristo";
   $image = "http://ecx.images-amazon.com/images/I/51SW84A28WL._AA115_.jpg";
?>
<!--  --><html>
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
               margin: 0px 10px 10px 0px;  ">
   
   <p>
	   A young man, falsely imprisoned by his jealous "friends," escapes and uses a hidden treasure to exact 
	   his revenge.
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
             value="25.00">
             
      <div class="googlecart-add-button" 
           tabindex="0" 
           role="button" 
           title="Add to cart"></div>
   </div>
</body>
</html>