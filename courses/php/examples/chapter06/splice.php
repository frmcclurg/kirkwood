<?php
   $deck = array( "Ace", "King",
                  "Queen", "Jack",
                  "Joker" );

   $max = count($deck) - 1;
   $offset = rand( 0, $max );

   // draw one random card
   $drawn = array_splice( $deck, $offset, 1 );

   printf( "Card drawn: %s<br>", $drawn[0] );
   printf( "Remaining deck:<br>" );

   for ( $i = 0; $i < count($deck); $i++ )
      printf( "\$deck[%d]: %s<br>",
              $i, $deck[$i] );
?>
