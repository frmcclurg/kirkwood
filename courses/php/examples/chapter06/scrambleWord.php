<?php
   $sentence = "now is the time for all good men to pray for the aid of their country";

   // at a space, split each
   // word into an array item
   $words = explode( " ",
                     $sentence );

   // randomize the array
   shuffle( $words );

   // convert array to string by joining
   // elements with space delimiters
   $scramble = implode( " ",
                        $words );

   printf( "Original: %s<br><br>
            Scrambled: %s",
            $sentence, $scramble );
?>
