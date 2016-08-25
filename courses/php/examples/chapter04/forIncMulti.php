<?php
   $min = 0;
   $max = 50;
   $multiple = 5;

   for ( $count = $min;
         $count <= $max;
         $count += $multiple )
   {
      printf( "%d<br>",
              $count );
   }
?>
