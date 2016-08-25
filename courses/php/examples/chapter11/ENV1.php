<?php
   /* Note: If the array $_ENV is
    *    undefined, you may need
    *    change the following
    *    setting in your "php.ini"
    *    file and restart the web
    *    server.  For xampp on
    *    windows, this file is found
    *    in "C:\xampp\php\php.ini"
    *    Check the phpinfo() call
    *    for the exact location of
    *    this file.
    *
    * Change this line:
    *    variables_order = "GPCS"
    *
    * To this instead:
    *    variables_order = "GPCSE"
    */

   $env = $_ENV;   // copy orginal
   ksort( $env );  // sort keys

   foreach ( $env as $key => $val )
   {
      printf( "<p> <b>\$_ENV[%s]:</b>
                  %s </p>\n",
         $key, $val );
   }
?>
