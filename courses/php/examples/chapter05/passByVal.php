<?php
   function passByValue( $y )
   {
      $y = 321;  // function value
      printf( "%s Inside: %d<br>",
               str_repeat( "&nbsp;", 3 ),
               $y );
   }

   $x = 123;  // initial value
   printf( "Before: %d<br>", $x );
   passByValue( $x );
   printf( "After: %d<br>", $x );
?>
