<?php
   /**
    * @file login.inc.php
    */
   $host = "cecert";
   $dbName = "fmcclurgDB";
   $username = "fmcclurg";
   $password = "Fmcclurg";

   // 1. Connect to the database
   $conn = mysqli_connect( $host,
                           $username,
                           $password );

   // check connection
   if ( mysqli_connect_errno() )  // not connected
   {
      die( "Could not connect $host to
            database.<br>" .
            mysqli_connect_error() );
   }

   // 2. Choose which database to use
   $useDb = mysqli_select_db( $conn, $dbName );

   if ( ! $useDb )  // not selected
   {
      die( "Could not select database
            $dbName <br>" .
            mysqli_error( $conn ) );
   }
?>
