<?php
   $narnia = array( "Peter", "Susan",
                   "Lucy", "Edmund" );

   $highKing = array_shift( $narnia );

   for ( $i = 0; $i < count($narnia); $i++ )
      printf( "\$narnia[%d]: %s<br>",
              $i, $narnia[$i] );

   printf( "<br><br>" );
   printf( "\$highKing: %s", $highKing );
?>
