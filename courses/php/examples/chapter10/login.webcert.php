<?php
   /**
    * @file login.inc.php
    */
   $host = "webcert";
   $dbName = "fmcclurgDB";
   $username = "fmcclurg";
   $password = "Fmcclurg";

   // 1. Connect to the database
   $conn = mysql_connect( $host,
                          $username,
                          $password );

   if ( ! $conn )  // not connected
   {
      die( "Could not connect $host to
            database.<br>" .
            mysql_error() );
   }

   // 2. Choose which database to use
   $useDb = mysql_select_db($dbName);

   if ( ! $useDb )  // not selected
   {
      die( "Could not select database
            $dbName <br>" .
            mysql_error() );
   }
?>
