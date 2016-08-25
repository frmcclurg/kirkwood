<?php
   $letters = range( 'a', 'z' );

   foreach ( $letters as $chr )
   {
      $rot13 = str_rot13( $chr );
      printf( "%s = %s<br>",
              $chr, $rot13 );
   }
?>
