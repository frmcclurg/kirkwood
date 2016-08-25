<?php
   $stooge = array( "Moe", "Larry" );

   array_unshift( $stooge, "Shemp" );

   for ( $i = 0; $i < count($stooge); $i++ )
      printf( "\$stooge[%d]: %s<br>",
              $i, $stooge[$i] );
?>
