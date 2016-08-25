<?php
   /**
    * @file list.3.php
    */

   // 1 & 2. Connect and use db
   require_once( "login.inc.php" );

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

   printf( "<table border=1>\n" );
   printf( "   <tr>\n" );
   printf( "      <th> Title </th>\n" );
   printf( "      <th> Mix </th>\n" );
   printf( "      <th> Type </th>\n" );
   printf( "   </tr>\n" );

   // 5. Display the results
   while ( $row =
              mysqli_fetch_assoc(
                 $result ) )
   {
?>
      <tr valign='top'>
         <td> <?= $row['title'] ?> </td>
         <td> <?= $row['mix'] ?> </td>
         <td> <?= $row['type'] ?> </td>
      </tr>
<?php
   }

   printf( "</table>\n" );

   // "login.inc.php" variable
   mysqli_close( $conn );
?>
