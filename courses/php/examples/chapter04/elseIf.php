<?php
   $dollar = 0.50;

   if ( $dollar > 100000 )
      echo "Category: Upper Class";
   elseif ( $dollar > 50000 )
      echo "Category: Middle Class";
   elseif ( $dollar > 10000 )
      echo "Category: Low Class";
   else  // fallback
      echo "Category: No Class";
?>
