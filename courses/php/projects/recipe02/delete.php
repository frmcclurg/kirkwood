<?php
   /**
    * @file delete.php
    */

   // 0, 1 & 2. Initialize connect and use db
   require_once( "include/login.php" );

   // variable initialization
   $delay = 3;  // seconds

   // 3. Build the SQL statement
   if ( strlen( $_REQUEST['id'] ) )
   {
      $sql = sprintf( "
      DELETE FROM recipe
         WHERE id = %d
         LIMIT 1",
         $_REQUEST['id'] );

      // for debugging
      // printf( "SQL: <pre>%s</pre>",
         // $sql );

      // 4. Execute the SQL statement
      $result = mysqli_query( $conn, $sql );

      if ( ! $result )  // sql failed
      {
         die( "Could not execute SQL:
               <pre>$sql</pre> <br />" .
               mysqli_error( $conn ) );
      }

      if ( mysqli_affected_rows( $conn ) != 0 )
      {
         $color = "red";
         $message = sprintf( "Record %d deleted.",
                             $_REQUEST['id'] );
      }
      else
      {
         $color = "black";
         $message = sprintf( "Record id %d does not exist.",
                             $_REQUEST['id'] );
      }
   }
   else
   {
      $color = "black";
      $message = "No record id specified.";
   }

   // 6. Close database connection
   mysqli_close( $conn );  // "login.php" variable

   // $location = sprintf( "Location: %s",
      // $_SERVER['HTTP_REFERER'] ); /* previous page */

   // header( $location ); /* redirect browser immediately */
?>

<html>
<head>
   <meta http-equiv="refresh"
         content="<?= $delay ?>; URL=<?= $_SERVER['HTTP_REFERER'] ?>" />
</head>

<body>

   <h3 style='color: <?= $color ?>'
       align='center'>
         <?= $message ?>
   </h3>

</body>
</html>
