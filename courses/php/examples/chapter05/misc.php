<?php
   function wonderful( $fileName )
   {
      printf( "Called from \"%s\"<br>",
              basename( $fileName ) );
   }

   wonderful( __FILE__ );
?>
