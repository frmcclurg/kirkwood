<?php
   /* Note: If "<?= ?>" is not
    *       working, you may need
    *       change the following
    *       setting in your "php.ini"
    *       file and restart the web
    *       server.  For xampp on
    *       windows, this file is found
    *       in "C:\xampp\php\php.ini"
    *       Check the phpinfo() call
    *       for the exact location of
    *       this file.
    *
    * Change this line:
    *    short_open_tag = Off
    *
    * To this instead:
    *    short_open_tag = On
    */

   $env = $_ENV;
   ksort( $env );

   foreach ( $env as $key => $val )
   {
?>
      <p> <b>$_ENV[<?= $key ?>]:</b>
         <?= $val ?> </p>
<?php
   }
?>
