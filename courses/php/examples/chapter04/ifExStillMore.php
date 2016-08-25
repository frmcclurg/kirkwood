<?php
   echo '$x = NULL;<br>';
   $x = NULL;

   echo 'if ( $x )  // ';
   if ( $x )  // false
      echo "true<br>";
   else
      echo "false<br>";

   echo '<br><br>';
   echo '$str = "";<br>';
   $str = "";

   echo 'if ( $str )  // ';
   if ( $str )  // false
      echo "true<br>";
   else
      echo "false<br>";

   echo '<br><br>';
   echo 'if ( TRUE || FALSE )  // ';
   if ( TRUE || FALSE )  // true
      echo "true<br>";

   echo '<br><br>';
   echo 'if ( TRUE && FALSE )  // ';
   if ( TRUE && FALSE )  // false
      echo "true<br>";
   else
      echo "false<br>";
?>
