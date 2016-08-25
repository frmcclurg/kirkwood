<?php
   $color = array( "red", "green",
                   "blue" );

   // obtain array length
   $size = count( $color );

   for ( $i = 0; $i < $size; $i++ )
   {
      printf( "\$color[%d]: %s<br>",
         $i, $color[$i] );
   }
?>
