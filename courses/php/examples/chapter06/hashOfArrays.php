<?php
   $bedrock = array(
      'Flintstone' =>
         array( 'Fred', 'Wilma',
                'Pebbles', 'Dino' ),
      'Rubble' =>
         array( 'Barney', 'Betty',
                'Bambam' ) );

   foreach ( $bedrock as $last => $family )
   {
      echo "\$last: $last<br>";

      foreach ( $family as $first )
      {
         echo "&nbsp; &nbsp; &nbsp;
               \$first: $first<br>";
      }
   }
?>
