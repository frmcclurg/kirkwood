<?php
/**
 * @brief     Contains SQL utility functions.
 * @file      sqlFunctions.inc.php
 * @copyright 2010 Fred McClurg, All Rights Reserved.
 * @category  SQL
 * @see       htmlFunctions.inc.php
 */

/* Turn on error reporting to aid in debugging */
error_reporting(E_ALL);

/**
 * @brief   Makes a connection to a database
 * @author  Fred R. McClurg, frmcclurg@gmail.com
 * @date    May 26, 2008
 * @see     disconnectDB()
 * @todo    Need to create username and password for reading the database
 * @warning Potential security risk using the root password with no password!
 * @param   $dbName    Application name or general category
 * @return  $dbConnect Database handle created by mysqli_connect()
 */
function connectDB( $dbName )
{
   // initialize variables
   $hostName = 'localhost';
   $userName = 'root';
   $password = '';

   // 1. & 2. Connect and use the database
   $dbConnect = mysqli_connect( $hostName, 
   		                       $userName, 
   		                       $password,
   		                       $dbName );

   // check connection
   if ( mysqli_connect_errno() )
   {
      die( "Could not make a connection to database: <br>" .
            mysqli_connect_error() );
   }

   return( $dbConnect );

}  // function connectDB()


/**
 * @brief  Disconnections from a database
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   May 26, 2008
 * @see    disconnectDB()
 * @param  $dbConnect Database handle created by mysqli_connect()
 */
function disconnectDB( $dbConnect )
{
   if ( $dbConnect )
   {
      mysqli_close( $dbConnect );
   }

}  // function disconnectDB()


/**
 * @brief  Displays the grant DB information in HTML table
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   May 26, 2008
 */
function displayGrantTable()
{
   // initialize variables
   $rowCount = 0;
   $evenColor = "#F5F5F5";
   $oddColor = "#D3D3D3";

   $query = "
SELECT person.lastName,
       person.firstName,
       research.title,
       DATE_FORMAT( research.startDate, '%M %e, %Y' ) AS formattedDate
FROM research, research_has_person, person
   WHERE ( research.id = research_has_person.research_id ) AND
         ( person.id = research_has_person.person_id ) AND
         ( research_has_person.isPrimary = TRUE )
   ORDER BY person.lastName, person.firstName";

   $result = mysqli_query( $conn, $query );

   if ( ! $result )
   {
      die( "Could not query database: <br>" .
         mysqli_error( $conn ) . "<br>" .
         "SQL: <pre>$query</pre>" );
   }

   while ( $row = mysqli_fetch_array( $result, MYSQL_ASSOC ) )
   {
      if ( ( $rowCount % 2 ) == 0 )
      {
         $rowColor = $evenColor;
      }
      else
      {
         $rowColor = $oddColor;
      }

      $last = $row['lastName'];
      $first = $row['firstName'];
      $title = $row['title'];
      $date = $row['formattedDate'];

      $htmlStr = "
      <tr bgcolor='$rowColor'>
         <td>  <!-- Last -->
            $last
         </td>
         <td>  <!-- First -->
            $first
         </td>
         <td>  <!-- Title -->
            $title
         </td>
         <td>  <!-- Start Date -->
            $date
         </td>
      </tr>";

      printf( "%s\n", $htmlStr );

      $rowCount++;
   }

}  // function displayGrantTable()

