<form action="<?= $_SERVER['PHP_SELF'] ?>"
      method="GET">

   <input type="checkbox"
          name="food"
          value="Hamburger">
      Hamburger <br>

   <input type="checkbox"
          name="food"
          value="Fries">
      Fries <br>

   <input type="checkbox"
          name="food"
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

      foreach ( $_GET as
                   $key => $value )
      {
         printf( "
            \$_GET[%s]: %s <br>",
               $key, $value );
      }
   }
?>
