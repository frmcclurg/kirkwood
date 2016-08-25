<?php
   // create cookie
   setcookie( "one", "Sugar",
              time() + (60 * 60) );
   setcookie( "two", "Oatmeal",
              time() + (60 * 60) );

   if ( isset( $_COOKIE['one'] ) )
   {
      printf( "Contents \$_COOKIE['one']:
               %s<br>", $_COOKIE['one'] );
   }
   else
   {
      echo "\$_COOKIE['one'] not set<br>";
   }

   if ( isset( $_COOKIE['two'] ) )
   {
      printf( "Contents \$_COOKIE['two']:
               %s<br>", $_COOKIE['two'] );
   }
   else
   {
      echo "\$_COOKIE['one'] not set<br>";
   }

   // destroy cookie
   setcookie( "one", "", time() - (60 * 60) );
   setcookie( "one", FALSE, 0 );

   if ( ! isset( $_COOKIE['one'] ) )
      echo "\$_COOKIE['one'] deleted<br>";

   if ( ! isset( $_COOKIE['two'] ) )
      echo "\$_COOKIE['two'] deleted<br>";
?>
