<?php
   /**
    * @file fetch_row.php
    */

   // 1 & 2. Connect and use db
   require_once( "login.inc.php" );

   // 3. Build the SQL statement
   $sql = "SELECT * FROM recipe";

   // 4. Execute the SQL statement
   $result = mysqli_query( $conn, $sql );

   if ( ! $result )  // sql failed
   {
      die( "Could not execute SQL
            '$sql' <br>" .
            mysqli_error( $conn ) );
   }

   // 5. Display results as numeric array
   while ( $row =
              mysqli_fetch_row(
                 $result ) )
   {
      printf( "ID:   %s &nbsp;
               Name: %s <br>",
                  $row[0], $row[1] );
   }

   // $conn initialized in "login.inc.php"
   mysqli_close( $conn );
?>
