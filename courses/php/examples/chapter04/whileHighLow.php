<?php
   $min = 0;
   $max = 100;
   $wrong = 0;  // init for ++

   // pick a "secret" number
   $mystery = rand( $min, $max );

   // try to guess secret number
   $guess = rand( $min, $max );

   while ( $guess != $mystery )
   {
      $wrong++;

      // guess is too small
      if ( $guess < $mystery )
      {
         // raise bottom range
         $min = $guess + 1;
      }
      // guess is too large
      else  // if ( $guess >= $mystery )
      {
         // lower top range
         $max = $guess;
      }

      // narrow range & prep condition
      $guess = rand( $min, $max );
   }

   printf( "Mystery Number: %d<br>
            High/Low Guesses: %d",
            $mystery, $wrong );
?>
