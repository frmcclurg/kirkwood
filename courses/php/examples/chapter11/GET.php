<form action="GET.php"
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
   foreach ( $_GET as $key => $val )
   {
      printf( "<b>\$_GET[%s]:</b>
                  %s <br>\n", $key, $val );
   }
?>
