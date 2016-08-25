<?php
   $day = 28;

   if ( $day <= 29 )  // true
   {
      if ( $day == 29 )  // false
         echo "Today's a leap day<br>";
   }
   else  // dangling else fixed
      echo "$day greater than 29<br>";
?>
