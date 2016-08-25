<?php
   $title = "Treasures of the Snow - A Story of Friendship and Forgiveness";
   $image = "http://ecx.images-amazon.com/images/I/518ZG0X6SYL._AA115_.jpg";
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
	   Annette and Lucien are enemies. After Annette gets Lucien into trouble at school, he decides to get 
	   back at her by threatening the most precious thing in the world to her: her little brother Dani. But 
	   tragedy strikes. Annette is so filled with rage she sets out to alienate and humiliate Lucien at 
	   every turn. As Lucien seeks to repent and restore, light floods both of their dark hearts.
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
             value="30.50">
             
      <div class="googlecart-add-button" 
           tabindex="0" 
           role="button" 
           title="Add to cart"></div>
   </div>
</body>
</html>