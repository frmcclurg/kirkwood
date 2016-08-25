<?php
   $word = "randomize";

   // break each char into array
   $pieces = str_split( $word );

   // randomize the array
   shuffle( $pieces );

   // convert elements into string
   $scramble = implode( "",
                        $pieces );

   printf( "Original: %s<br>
            Scrambled: %s<br>",
            $word, $scramble );
?>
