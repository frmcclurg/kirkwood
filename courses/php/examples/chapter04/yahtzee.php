<?php
   $yahtzee = 5;  // count of matching dice
   $diceMin = 1;  // smallest number on dice
   $diceMax = 6;  // largest number on dice
   $correct = 0;  // correct guesses matched
   $failed = 0;   // count of wrong guesses

   // select initial value to match other rolls
   $choice = rand( $diceMin, $diceMax );
   $correct++;  // first roll

   do  // while()
   {
      $current = rand( $diceMin, $diceMax );  // roll the dice

      if ( $current == $choice )  // dice matches first roll
         $correct++;
      else  // dice doesn’t match
         $failed++;
   } while ( $correct < $yahtzee );  // do...while requires semi-colon!

   printf( "Yahtzee required %d rolls.", $failed + $correct );
?>
