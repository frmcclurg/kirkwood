<?php
   for ( $i = 0, $j = 9; // multi init
         $i < 10;  // condition
         $i++, $j-- ) // multi inc/dec
   {
      printf( "\$i: %d", $i );
      echo str_repeat( "&nbsp;", 5 );
      printf( "\$j: %d", $j );
      printf( "<br>\n" );
   }
?>
