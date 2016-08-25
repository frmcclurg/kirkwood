<?php
   $yahtzee = 5;  // matching dice
   $diceMin = 1;  // smallest dice
   $diceMax = 6;  // largest dice
   $correct = 0;  // guesses matched
   $failed = 0;   // wrong guesses

   // select initial value
   $choice = rand( $diceMin,
                   $diceMax );

   $correct++;  // first roll

   do  // while()
   {
      // roll the dice
      $current = rand( $diceMin,
                       $diceMax );

      // does dice match first roll
      if ( $current == $choice )
         $correct++;
      else
         $failed++;

   } while ( $correct < $yahtzee );
   // do...while requires semi-colon!

   printf( "Yahtzee required %d rolls.",
           $failed );
?>

