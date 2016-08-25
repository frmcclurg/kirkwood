<?php
   function swap( &$x, &$y )
   {
      $temp = $x;
      $x = $y;
      $y = $temp;
   }

   $x = 123;
   $y = 456;

   printf( "Before: %d, %d<br>", $x, $y );
   swap( $x, $y );
   printf( "After: %d, %d<br>", $x, $y );
?>
