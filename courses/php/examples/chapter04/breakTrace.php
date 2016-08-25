<pre>
<?php
   for ( $x = -2; $x < 3; $x++ )
   {
      printf( "\$x=%d\t", $x );

      for ( $y = -2; $y < 3; $y++ )
      {
         if ( $y == 0 )
            break;  // escape inner

         printf( "\$y=%d\t", $y );
      }  // inner loop

      printf( "<br>" );
   }  // outer loop
?>
</pre>
