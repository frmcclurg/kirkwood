<?php
   $subject = "Every good boy deserves fudge.";
   $pattern = '/[aeiou]/i';

   preg_match_all( $pattern, $subject, $matches );

   // $matches[0] is an array of pattern matches
   $total = count( $matches[0] );

   printf( "String contains %d vowels",
              $total );
?>
