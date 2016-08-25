<?php
   $letters = range( 'a', 'z' );

   foreach ( $letters as $chr )
   {
      if ( $chr > 'm' )
         $rot13 = ord( $chr ) - 13;
      else
         $rot13 = ord( $chr ) + 13;

      printf( "%s = %s<br>",
         $chr, chr( $rot13 ) );
   }
?>
