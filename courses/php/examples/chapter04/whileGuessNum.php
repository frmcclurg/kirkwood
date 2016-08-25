<?php
   $min = 0;
   $max = 100;
   $guessWrong = 0;  // init for ++
   $magicNumber = rand( $min, $max );

   // initialization before condition
   $guessCurrent = rand( $min, $max );

   while ( $guessCurrent != $magicNumber )
   {
      $guessWrong++;

      // prep for next iteration or exit
      $guessCurrent = rand( $min, $max );
   }

   printf( "Mystery Number: %d<br>
            Random Guesses: %d",
           $magicNumber, $guessWrong );
?>
