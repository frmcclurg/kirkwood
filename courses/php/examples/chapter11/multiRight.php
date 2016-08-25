<form action="<?= $_SERVER['PHP_SELF'] ?>"
      method="GET">

   <input type="checkbox"
          name="food[]"
          value="Hamburger">
      Hamburger <br>

   <input type="checkbox"
          name="food[]"
          value="Fries">
      Fries <br>

   <input type="checkbox"
          name="food[]"
          value="Drink">
      Drink <br>

   <input type="submit"
          name="order"
          value="Order">
</form>

<?php
   if ( isset( $_GET['order'] ) )
   {
      printf( "<br><br> <hr>" );
      printf( "Your order:<br>" );

      foreach ( $_GET as $key => $outie )
      {
         if ( ! is_array( $_GET[$key] ) )
         {
            printf( "\$_GET[%s]: %s <br>",
                    $key, $outie );
         }
         else  // $_GET[$key] is an array
         {
            foreach ( $_GET[$key] as $innie )
            {
               printf( "\$_GET[%s]: %s <br>",
                       $key, $innie );
            }
         }
      }
   }
?>
