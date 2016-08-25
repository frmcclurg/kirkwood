<?php
   $server = $_SERVER;  // copy original
   ksort( $server );    // sort keys

   foreach ( $server as $key => $val )
   {
      printf( "<p> <b>\$_SERVER[%s]:</b>
                  %s </p>\n",
         $key, $val );
   }
?>
