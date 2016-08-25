<?php
   /**
    * @file login.inc.php
    */
   // 0. initialize DB variables
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbName = "cookbookdb";

   // 1. & 2. Connect and use the database
   $conn = mysqli_connect( $host,
                           $username,
                           $password,
   		                  $dbName );

   // check connection
   if ( mysqli_connect_errno() )  // not connected
   {
      die( "Could not connect $host to
            database.<br>" .
            mysqli_connect_error() );
   }
?>
