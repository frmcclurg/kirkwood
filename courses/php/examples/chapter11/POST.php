<form action="POST.php" method="POST">

   Favorite Animal: <br>
   <input type="text" name="animal" value=""> <br><br>

   Favorite Food: <br>
   <select name="food">
      <option name=""></option>
      <option name="lasagna">Lasagna</option>
      <option name="pizza">Pizza</option>
   </select> <br><br>

   Favorite Color: <br>
   <input type="radio" name="color" value="red"> Red
   <input type="radio" name="color" value="green"> Green
   <input type="radio" name="color" value="blue"> Blue <br><br>

   <input type="submit" name="vote" value="Vote">
</form>

<?php
   foreach ( $_POST as $key => $val )
   {
      printf( "<b>\$_POST[%s]:</b>
                  %s <br>\n", $key, $val );
   }
?>
