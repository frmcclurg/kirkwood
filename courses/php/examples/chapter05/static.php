<?php
   function birthday()
   {
      // initialize once
      static $age = 0;
      return( ++$age );

      // result in same value?
      // return( $age++ );
   }

   for ( $i = 0 ; $i < 5 ; $i++ )
   {
      printf( "Age: %d<br>",
                 birthday() );
   }
?>
