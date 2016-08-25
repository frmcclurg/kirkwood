<?php
   echo '$x = 5;<br>';
   $x = 5;

   echo '<br><br>';
   echo 'if ( $x == 5 )  // ';
   if ( $x == 5 )  // true
      echo "true<br>";

   echo 'if ( $x )  // ';
   if ( $x )  // true
      echo "true<br>";

   echo 'if ( TRUE )  // ';
   if ( TRUE )  // true
      echo "true<br>";

   // is number between 2 and 7?
   echo 'if ( ($x > 2) && ($x < 7) )  // ';
   if ( ($x > 2) && ($x < 7) )  // true
      echo "true";
?>
