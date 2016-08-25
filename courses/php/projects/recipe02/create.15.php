<?php
   /**
    * @file create.15.php
    */

   // initialize variables
   $pageTitle = "Create/Modify Recipe";

   // 0, 1 & 2. Initialize connect and use db
   require_once( "include/login.php" );

   // for HTML select/option creation
   require_once( "include/form.php" );

   if ( $_REQUEST['submit'] == 'Create' )  // create pressed
   {
      if ( strlen( $_REQUEST['title'] ) > 0 )  // title must exist
      {
         // 3. Build the SQL statement
         $sql = sprintf( "
            INSERT INTO recipe
               (name, content, category_id)
               VALUES ('%s', '%s', %d)",
                  $_REQUEST['title'],
                  $_REQUEST['content'],
                  $_REQUEST['category'] );
      }
      else
      {
         $error = "New recipe must have a title.";
      }
   }
   elseif ( $_REQUEST['submit'] == 'Modify' )  // modify pressed
   {
      if ( ( strlen( $_REQUEST['title'] ) > 0 ) && // title exists
                     $_REQUEST['id'] )  // id exists and is positive
      {
         // 3. Build the SQL statement
         $sql = sprintf( "
            UPDATE recipe
               SET name = '%s',
                   content = '%s',
                   category_id = %d
               WHERE id = '%d'
               LIMIT 1",
                   $_REQUEST['title'],
                   $_REQUEST['content'],
                   $_REQUEST['category'],
                   $_REQUEST['id'] );
      }
      else
      {
         if ( ! $_REQUEST['id'] )
         {
            $error = "Recipe must be created before it can be modified.";
         }
         else  // if ( ! strlen( $_REQUEST['title'] ) > 0 )
         {
            $error = "Modified recipe must have a title.";
         }
      }
   }
   elseif ( $_REQUEST['id'] )  // id passed on query string
   {
      // 3. Build the SQL statement
      $sql = sprintf( "
         SELECT name, content, category_id
            FROM recipe
            WHERE id = %d",
               $_REQUEST['id'] );
   }

   if ( $sql )  // create/modify pressed or id passed.
   {
      if ( array_key_exists( 'debug', $_REQUEST ) )
      {
         printf( "SQL: <pre>%s</pre>", $sql );
      }

      // 4. Execute the SQL statement
      $result = mysqli_query( $conn, $sql );

      if ( ! $result )  // SQL failed
      {
         die( "Could not execute SQL
               <pre>$sql</pre> <br />" .
               mysqli_error( $conn ) );
      }

      if ( $_REQUEST['submit'] == 'Create' )  // create pressed
      {
         // 5. Obtain SQL INSERT results
         $_REQUEST['id'] = mysqli_insert_id( $conn );

         if ( $_REQUEST['id'] )
         {
            $status = sprintf( "Recipe %d added to database.",
                               $_REQUEST['id'] );
         }
         else
         {
            $error = "Recipe was not created.";
         }
      }
      elseif ( $_REQUEST['submit'] == 'Modify' )  // modify pressed
      {
         // 5. Obtain SQL UPDATE results
         if ( mysqli_affected_rows( $conn ) > 0 )
         {
            $status = sprintf( "Recipe %d was updated.",
                                $_REQUEST['id'] );
         }
         else
         {
            $error = sprintf( "Recipe %d does not exist.",
                               $_REQUEST['id'] );
         }
      }
      elseif ( $_REQUEST['id'] )  // id passed on query string
      {
         // 5. Obtain the SQL results
         if ( $row = mysqli_fetch_assoc( $result ) )
         {
            $_REQUEST['title'] = $row['name'];
            $_REQUEST['content'] = $row['content'];
            $_REQUEST['category'] = $row['category_id'];
         }
         else
         {
            $error = sprintf( "Recipe %d does not exist.",
                              $_REQUEST['id'] );
         }
      }
   }
?>

<html>
   <head>
      <title>
         <?= $pageTitle ?>
      </title>

      <link rel="stylesheet"
            type="text/css"
            href="css/common.css" />
   </head>

   <body>
      <h1><?= basename( __FILE__ ) ?></h1>

      <!-- Navigation Tabs -->
      <table cellpadding="10"
             cellspacing="5"
             width="100%">
         <tr>
            <th bgcolor="gray"
                style="color: #ffffff;"
                width="15%">
               <a href="search.php"
                  class="tabs">Search/Delete</a>
            </th>
            <th bgcolor="#D3D3D3"
                width="15%">
               Create/Modify
            </th>
            <th height="20">
               &nbsp;
            </th>
         </tr>
      </table>

      <img src="images/pixels/ccccff.png"
           height="4"
           width="100%">

      <p />

      <form action="<?= $PHP_SELF ?>"
            method="GET">
         <table width="100%">
            <tr>
               <td>

                  <table border="1"
                         cellspacing="0"
                         cellpadding="5"
                         width="100%">
                     <tr bgcolor="#ffe1ff">
                        <td>
                           Title:
                           <input type="text"
                                  name="title"
                                  size="30"
                                  value="<?= $_REQUEST['title'] ?>" />
                        </td>
                        <td align="left">
                           Category:
<?php
   PrintDropDown( $conn,
                  "category",
                  "name",
                  $_REQUEST['category'],
                  FALSE );
?>
                        </td>
                     </tr>

                     <tr bgcolor="#e0ffff">
                        <td colspan="2">
                           Contents: <br/>
                           <textarea
                              name="content"
                              rows="10"
                              cols="37"
                              style="width: 100%;"><?= $_REQUEST['content'] ?></textarea>
                        </td>
                     </tr>
                  </table>

               </td>
            </tr>

            <tr>
               <td>
                  <hr />
               </td>
            </tr>

            <tr>
               <td>
                  <table width="100%"
                         cellpadding="10">
                     <tr>
                        <td width="20%">
                           &nbsp;
                        </td>
                        <td align="center"
                            width="20%">
                           <input type="submit"
                                  name="submit"
                                  value="Create" />
                        </td>
                        <td width="20%">
                           &nbsp;
                        </td>
                        <td align="center"
                            width="20%">
                           <input type="submit"
                                  name="submit"
                                  value="Modify" />
                        </td>
                        <td width="20%">
                           &nbsp;
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>

         <!-- verbose SQL reporting (debugging) -->
         <input type="hidden" name="debug" />

         <input type="hidden"
                name="id"
                value="<?= $_REQUEST['id'] ?>" />
      </form>
<?php
   if ( $error )  // display a status message
   {
      printf( "<script>" );
      printf( "   alert( '%s' );", $error );
      printf( "</script>" );
   }
   else  // pop-up a dialog message
   {
      printf( "%s", $status );
   }

   // 6. Close database connection
   mysqli_close( $conn );  // "login.php" variable
?>
   </body>
</html>
