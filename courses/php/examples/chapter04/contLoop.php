<?php
   for ( $cnt = 0; $cnt < 10; $cnt++ )
   {
      if ( $cnt == 4 )
         continue; // skip iteration

      printf( "Count: %d<br>",
              $cnt );
   }
?>
