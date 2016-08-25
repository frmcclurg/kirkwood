<form action="REQUEST.php"
      method="GET">

   Find:
   <input type="text"
          name="find"
          value="">

   <input type="submit"
          name="search"
          value="Search Database">
</form>

<?php
   if ( isset( $_REQUEST['find'] ) )
   {
      printf( "<hr>\n" );

      foreach ( $_REQUEST as $key => $val )
      {
         printf( "<b>\$_REQUEST[%s]:</b>
                     %s <br>\n", $key, $val );
      }
   }
?>
