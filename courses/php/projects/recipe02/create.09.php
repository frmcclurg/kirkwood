<?php
   /**
    * @file create.09.php
    */

   // initialize variables
   $pageTitle = "Create/Modify Recipe";

   // 0, 1 & 2. Initialize connect and use db
   require_once( "include/login.php" );

   // for HTML select/option creation
   require_once( "include/form.php" );

   if ( $_REQUEST['submit'] == 'Create' )  // create pressed
   {
      // 3. Build the SQL statement (to create new recipe)
      $sql = sprintf( "
         INSERT INTO recipe
            (name, content, category_id)
            VALUES ('%s', '%s', %d)",
               $_REQUEST['title'],
               $_REQUEST['content'],
               $_REQUEST['category'] );
   }
   elseif ( $_REQUEST['submit'] == 'Modify' )  // modify pressed
   {
      // 3. Build the SQL statement (to update existing recipe)
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
   elseif ( $_REQUEST['id'] )  // id passed on query string
   {
      // 3. Build the SQL statement (to display existing recipe)
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
      </form>
<?php
   // 6. Close database connection
   mysqli_close( $conn );  // "login.php" variable
?>
   </body>
</html>
