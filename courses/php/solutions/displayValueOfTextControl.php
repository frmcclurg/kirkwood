<html>
<head>
   <title>
      Display the value of the text control
   </title>
</head>

I am a program that can read your mind. &nbsp; Think about your favorite
color. &nbsp; <b> Do not say the color out loud!</b> &nbsp; Concentrate on
that color. &nbsp; Focus on that color. &nbsp; Now to make sure you are
really and truly thinking about your favorite color, type it into the text
control below and press the magic button to clear the text: <br><br>

<form action="<?php $PHP_SELF ?>" method="GET">
   Favorite color:
   <input type="text" name="colorText">
   <input type="submit" value="Magic Button">
</form>

<?php
   // Replace the "..." with a statement (or statements) that would diplay the
   // value in the text control specified above

   if ( $_GET["colorText"] )
   {
      printf( "<br><br> Your favorite color is: %s\n", $_GET["colorText"] );
   }
?>
</html>
