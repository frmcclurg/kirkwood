<?php
   /**
    * @file search.13.php
    */

   // 0, 1 & 2. Initialize connect and use db
   require_once( "include/login.php" );

   // for HTML table creation
   require_once( "include/table.php" );

   // for HTML select/option creation
   require_once( "include/form.php" );

   // initialize variables
   $requestTitle = $_REQUEST['title'];
   $searchClause = "";
   $categoryClause = "";

   // 3. Build the SQL statement
   if ( strlen( $_REQUEST['title'] ) > 0 )  // text value exists
   {
      // one checkboxes checked
      if ( array_key_exists( 'searchTitle', $_REQUEST ) ||  // title checked
           array_key_exists( 'searchContent', $_REQUEST ) ) // content checked
      {
         // initialize strings
         $titleClause = "";
         $contentClause = "";

         // title checkbox selected
         if ( array_key_exists( 'searchTitle', $_REQUEST ) )
         {
            $titleClause = "( rec.name LIKE '%$requestTitle%' )";
         }

         // content checkbox selected
         if ( array_key_exists( 'searchContent', $_REQUEST ) )
         {
            $contentClause = "( rec.content LIKE '%$requestTitle%' )";
         }

         // both title and content are checked
         if ( array_key_exists( 'searchTitle', $_REQUEST ) &&  // title checked
              array_key_exists( 'searchContent', $_REQUEST ) ) // content checked
         {
            $searchClause = sprintf( "AND ( %s OR %s )",
                                     $titleClause, $contentClause );
         }
         else  // either title or content are checked
         {
            $searchClause = "AND ";
            $searchClause .= $titleClause;
            $searchClause .= $contentClause;
         }
      }
   }

   if ( $_REQUEST['category'] > 0 )  // category selected
   {
      $categoryClause =
         sprintf( "AND ( cat.id = %d )",
            $_REQUEST['category'] );
   }

   $sql = sprintf( "
   SELECT rec.id AS rid,
          rec.name AS title,
          rec.content AS mix,
          cat.name AS type
      FROM recipe AS rec,
           category AS cat
      WHERE
         ( rec.category_id = cat.id )
         %s  # search title or content
         %s  # search category
      ORDER BY title",
         $searchClause,
         $categoryClause );

   if ( array_key_exists( 'debug',
                          $_REQUEST ) )
   {
      printf( "SQL: <pre>%s</pre>", $sql );
   }

   // 4. Execute the SQL statement
   $result = mysqli_query( $conn, $sql );

   if ( ! $result )  // sql failed
   {
      die( "Could not execute SQL:
            <pre>$sql</pre> <br>" .
            mysqli_error( $conn ) );
   }
?>

<html>
   <head>
      <title>
         Search/Delete Notecard
      </title>

      <script language="JavaScript"
              type="text/javascript"
              src="js/utility.js"></script>

      <link rel="stylesheet"
            type="text/css"
            href="css/common.css">
   </head>

   <body>
      <h1><?= basename( __FILE__ ) ?></h1>
      
      <!-- Navigation Tabs -->
      <table cellpadding="10"
             cellspacing="5"
             width="100%">
         <tr>
            <th bgcolor="#D3D3D3"
                width="15%">
               Search
            </th>

            <th bgcolor="gray"
                style="color: #ffffff;"
                width="15%">
               <a href="create.html"
                  class="tabs">Create</a>
            </th>

            <th>
               &nbsp;
            </th>
         </tr>
      </table>

      <img src="images/pixels/ccccff.png"
           height="4" width="100%">

      <br><br>

      <form action="<?= $PHP_SELF ?>">
         <table border="1"
                cellspacing="0"
                cellpadding="5">
            <tr bgcolor="#FFFFD4">
               <td align="left">
                  Search:
                  <input type="text"
                         name="title"
                         value="<?= $_REQUEST['title'] ?>"> <br>

                  <div style="float: right;">
	                  <label>
	                     <input type="checkbox" name="searchTitle" value="true"
	                        <?= StickyCheckbox( TRUE, "searchTitle" ) ?>>
	                     Title
	                  </label>
	
	                  &nbsp;
	
	                  <label>
	                     <input type="checkbox" name="searchContent" value="true"
	                        <?= StickyCheckbox( FALSE, "searchContent" ) ?>>
	                     Contents
	                  </label>
                  </div>
               </td>
               <td align="left">
                  Category:
<?php
   PrintDropDown( $conn,
                  "category",
                  "name",
                  $_REQUEST['category'],
                  TRUE );
?>
               </td>
               <td align="center"
                   valign="middle">
                  <input type="submit"
                         name="search"
                         value="Search">
               </td>
            </tr>
         </table>

         <br><br>
<?php
   $header = array( "ID",
                    "Title",
                    "Contents",
                    "Category",
                    "Action" );

   PrintTableHeader( $header );

   // 5. Display the results
   while ( $row =
              mysqli_fetch_assoc(
                 $result ) )
   {
      PrintTableRow( $row['rid'], $row );
   }

   printf( "</table>\n" );

   // 6. Close the database connection
   mysqli_close( $conn );
?>
         <input type="hidden" name="debug">
      </form>
   </body>
</html>
