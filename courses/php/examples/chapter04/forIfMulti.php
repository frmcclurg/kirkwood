<?php
   $min = 0;
   $max = 50;
   $multiple = 5;

   for ( $count = $min;
         $count <= $max;
         $count++ )
   {
      if ( ( $count % 5 ) == 0 )
         printf( "%d<br>",
                 $count );
   }
?>
