<?php
   $deck = array( "Ace", "King",
                  "Queen", "Jack",
                  "Joker" );

   shuffle( $deck );  // randomize array

   for ( $i = 0; $i < count($deck); $i++ )
      printf( "\$deck[%d]: %s<br>",
              $i, $deck[$i] );
?>
