<?php
   // create ten second cookie
   setcookie( "one", "Sugar",
              time() + 10 );
   setcookie( "two", "Oatmeal",
              time() + 10 );

   if ( isset( $_COOKIE['one'] ) )
   {
      echo "\$_COOKIE['one'] created.<br>";
      printf( "Contents: %s<br><br>", 
              $_COOKIE['one'] );
   }
   else
   {
      echo "\$_COOKIE['one'] not set<br>";
   }

   if ( isset( $_COOKIE['two'] ) )
   {
      echo "\$_COOKIE['two'] created.<br>";
      printf( "Contents: %s<br><br>", 
              $_COOKIE['two'] );
   }
   else
   {
      echo "\$_COOKIE['two'] not set<br>";
   }
?>
