/**
 * @brief Prompts for confirmation before
 *        redirecting to page for deletion
 * @param id    ID of record to delete
 * @param title Title of record to delete
 * @param referer   URL of the previous page
 */
function confirmDelete( id, title, referer )
{
   // confirmation message
   var msg = "Are you sure that you want to delete '" +
              title + "'?";
   var reply;
   var url = "delete.php?id=" + id + "&referer=" + referer;

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

