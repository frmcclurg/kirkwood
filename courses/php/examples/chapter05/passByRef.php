<?php
   function passByRef( &$y )
   {
      $y = 321;
      printf( "%sInside: %d<br>", 
               str_repeat( "&nbsp;", 3 ),
               $y );
   }

   $x = 123;
   printf( "Before: %d<br>", $x );
   passByRef( $x );
   printf( "After: %d<br>", $x );
?>
