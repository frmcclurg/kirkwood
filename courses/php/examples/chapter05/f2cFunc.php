<?php
   function f2c( $degreeF )
   {
      $degreeC = ( 5 / 9 ) *
                 ( $degreeF - 32 );

      return( $degreeC );
   }

   $fahrenheit = 212;
   $celsius = f2c( $fahrenheit );
   printf( "%.1f Fahrenheit equals
            %.1f Celsius",
           $fahrenheit, $celsius );
?>
