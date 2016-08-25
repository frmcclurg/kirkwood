<?php
   /**
    * @file list.4.php
    */

   // 1 & 2. Connect and use db
   require_once( "login.inc.php" );

   // for HTML table creation
   require_once( "table.inc.php" );

   // 3. Build the SQL statement
   $sql = "
   SELECT rec.name AS title,
          rec.content AS mix,
          cat.name AS type
      FROM recipe AS rec,
           category AS cat
      WHERE rec.category_id = cat.id
      ORDER BY title";

   // 4. Execute the SQL statement
   $result = mysqli_query( $conn, $sql );

   if ( ! $result )  // sql failed
   {
      die( "Could not execute SQL
            '$sql' <br>" .
            mysqli_error( $conn ) );
   }

   $header = array( "Title",
                    "Mix",
                    "Type" );

   PrintTableHeader( $header );

   // 5. Display the results
   while ( $row =
              mysqli_fetch_assoc(
                 $result ) )
   {
      PrintTableRow( $row );
   }

   printf( "</table>\n" );

   // "login.inc.php" variable
   mysqli_close( $conn );
?>
