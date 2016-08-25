<?php
   for ( $x = -2; $x < 2; $x++ )
   {
      for ( $y = -2; $y < 2; $y++ )
      {
         if ( $y == 0 )
         {
            // can't divide by zero
            break;  // escape inner
         }

         printf( "%d / %d = %f<br>",
                 $x, $y, $x / $y );
      }  // inner loop
   }  // outer loop
?>
