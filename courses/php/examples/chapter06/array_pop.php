<?php
   $stooge = array( "Moe", "Larry",
                    "Curly" );

   $best = array_pop( $stooge );

   for ( $i = 0; $i < count($stooge); $i++ )
      printf( "\$stooge[%d]: %s<br>",
              $i, $stooge[$i] );

   printf( "<br><br>" );
   printf( "\$best: %s", $best );
?>
