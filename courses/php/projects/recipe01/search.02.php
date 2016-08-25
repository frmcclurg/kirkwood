<?php
   /**
    * @file search.02.php
    */

   // 0, 1 & 2. Initialize connect and use db
   require_once( "include/login.php" );

   // 3. Build the SQL statement
   $sql = "
   SELECT rec.id AS rid,
          rec.name AS title,
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

      <script language="JavaScript" type="text/javascript">
/**
 * @brief Prompts for confirmation before
 *        redirecting to page for deletion
 * @param $id    ID of record to delete
 * @param $title Title of record to delete
 */
function confirmDelete(id, title)
{
   // confirmation message
   var msg = "Are you sure that you want to delete '" +
              title + "'?";
   var reply;
   var url = "delete.html?id=" + id;

   reply = confirm(msg);

   if ( reply == true )  // "OK" pressed
   {
      window.location = url;
   }
   else  // "Cancel" button pressed
   {
      // alert( "No action taken" );
   }
}  // function confirmDelete()


/**
 * @brief Redirects page for updates
 *        (not currently used).  Could
 *        be used if href is replaced
 *        by a push button.
 * @param $id  ID of record to update
 */
function editRecord(id)
{
   // redirect to a new URL
   window.location = "create.html?id=" + id;
}  // function editRecord()
      </script>

      <style type="text/css">
/*
 * set color of tabs
 */
a.tabs
{
   color: #cccccc;
   padding: 5px;
   border-color: transparent;
   text-decoration: none;
   border-width: 1px;
   border-style: solid;
}


/*
 * creates rollover effect without
 * images and without JavaScript
 */
a.tabs:hover
{
   border-color: Red;
   color: White;
}


/*
 * handles mouse down effects
 */
a.tabs:active
{
   border-color: Yellow;
   color: Red;
}
      </style>
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

      <form action="search.php">
         <table border="1"
                cellspacing="0"
                cellpadding="5">
            <tr bgcolor="#FFFFD4">
               <td align="left">
                  Title:
                  <input type="text"
                         name="title">
               </td>
               <td align="left">
                  Category:
                  <select name="category">
                     <option value="0">
                     </option>

                     <option value="1">
                        Beverage
                     </option>

                     <option value="2">
                        Dessert
                     </option>
                  </select>
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

         <table border="1"
                cellspacing="0"
                cellpadding="5">
            <tr bgcolor="#D3D3D3">
               <th>
                  Title
               </th>
               <th>
                  Contents
               </th>
               <th>
                  Category
               </th>
               <th>
                  Action
               </th>
            </tr>

            <tr>
               <td>  <!-- Title -->
                  <a href="create.html">Jello</a>
               </td>
               <td>  <!-- Contents -->
                  Mix the contents ...
               </td>
               <td>  <!-- Category -->
                  Dessert
               </td>
               <td>  <!-- Action -->
                  <input type="button"
                         name="delete"
                         value="Delete?"
                         onClick="confirmDelete(1,
                                                'Jello');">
               </td>
            </tr>
         </table>
<?php
   // 6. Close the database connection
   mysqli_close( $conn );
?>
      </form>
   </body>
</html>
