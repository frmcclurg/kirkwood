<?php
   echo 'if ( $x = 0 )  // ';
   if ( $x = 0 )  // assignment!
      echo "Always reached<br>";
   else
      echo "Never reached<br>";

   echo '<br><br>';
   echo 'if ( $x = 4 )  // ';
   if ( $x = 4 )  // assignment!
      echo "Always reached<br>";

   echo '<br><br>';
   echo '// short-ciruited "OR" <br>';
   echo 'if ( TRUE || ++$x )  // ';
   if ( TRUE || ++$x )  // not incremented
      printf( "Always reached:
                \$x=%d<br>", $x );
   else
      printf( "Never reached:
                \$x=%d<br>", $x );

   echo '<br><br>';
   echo '// short-ciruited "AND" <br>';
   echo 'if ( FALSE && ++$x )  // ';
   if ( FALSE && ++$x )  // not incremented
      printf( "Always reached:
                \$x=%d<br>", $x );
   else
      printf( "Never reached:
                \$x=%d<br>", $x );
?>
