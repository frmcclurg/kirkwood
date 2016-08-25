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
               <pre>$sql</pre> <br>" .
               mysqli_error( $conn ) );
      }

      // 5. Display the results
      if ( mysqli_affected_rows( $conn ) > 0 )  // last query success
      {
         $color = "#ff0000";  // red
         $message = sprintf( "Record %d deleted.",
                             $_REQUEST['id'] );
      }
      else  // last query failed
      {
         $color = "#000000";  // black
         $message = sprintf( "Record %d does not exist.",
                             $_REQUEST['id'] );
      }
   }
   else
   {
      $color = "#ff00ff";  // magenta
      $message = "No record id specified.";
   }

   // $location = sprintf( "Location: %s",
      // $_SERVER['HTTP_REFERER'] );  /* previous page */

   if ( strlen( $_REQUEST['referer'] ) )
   {
      $redirectUrl = $_REQUEST['referer'];
   }
   elseif ( strlen( $_SERVER['HTTP_REFERER'] ) )
   {
      $redirectUrl = $_SERVER['HTTP_REFERER'];
   }
   else
   {
      $redirectUrl = "search.php";
   }

   // header( $location );  /* redirect browser immediately */
?>

<html>
<head>
   <title>
      Delete Notecard
   </title>

   <meta http-equiv="refresh"
         content="<?= $delay ?>;
         URL=<?= $redirectUrl ?>">
</head>

<body>
   <br><br>
   <br>

   <h1 style='color: <?= $color ?>'
       align='center'>
         <?= $message ?>
   </h1>

</body>
</html>
