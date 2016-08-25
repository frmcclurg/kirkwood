<?php
   echo '$x = 0;<br>';
   $x = 0;

   echo '<br><br>';
   echo 'if ( $x == 0 )  // ';
   if ( $x == 0 )  // true
      echo "true<br>";
   else
      echo "false<br>";

   echo 'if ( $x )  // ';
   if ( $x )  // false
      echo "true<br>";
   else
      echo "false<br>";

   echo 'if ( ! $x )  // ';
   if ( ! $x )  // true
      echo "true<br>";
   else
      echo "false<br>";

   // is number outside range of -1 and 7?
   echo 'if ( ($x < -1) && ($x > 7) )  // ';
   if ( ($x < -1) && ($x > 7) )  // false
      echo "true<br>";
   else
      echo "false<br>";
?>
