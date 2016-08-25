<?php
   $torah = array( "Genesis",
                   "Exodus",
                   "Leviticus",
                   "Numbers",
                   "Deuteronomy" );

   sort( $torah );  // sort array by value

   for ( $i = 0; $i < count($torah); $i++ )
      printf( "\$torah[%d]: %s<br>",
              $i, $torah[$i] );
?>
