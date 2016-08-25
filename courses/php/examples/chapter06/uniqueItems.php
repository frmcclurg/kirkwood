<?php
   // stifle error messages:
   //    "Notice: Undefined variable"
   // Report all errors except E_NOTICE
   error_reporting( E_ALL ^ E_NOTICE );

   $cartoon =
      array( 'Fred', 'Barney',
             'Fred', 'Wilma',
             'Fred', 'Pebbles',
             'Fred', 'Dino' );

   foreach ( $cartoon as $name )
      $unique[$name]++;  // occurrences

   foreach ( $unique as $name => $occur )
   {
      printf( "Actor %s occurred
               %d times<br>",
         $name, $occur );
   }
?>
