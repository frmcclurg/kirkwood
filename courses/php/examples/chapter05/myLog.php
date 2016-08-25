<?php
   function myLog( $exp, $base = 10 )
   {
      return( log( $exp, $base ) );
   }

   $result = myLog( 1000 );

   // 3 = log10(1000)
   // 10 x 10 x 10 = 1000
   printf( "log10(1000): %.0f<br>",
            $result );

   // 3 = log2(8)
   // 2 x 2 x 2 = 8
   $result = myLog( 8, 2 );

   printf( "log2(8): %d<br>",
            $result );
?>
