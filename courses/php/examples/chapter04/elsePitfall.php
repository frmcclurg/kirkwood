<?php
   $day = 28;

   if ( $day <= 29 )  // true
      if ( $day == 29 )  // false
         echo "Today's a leap day<br>";
   else  // note: this is dangling else!
      echo "$day greater than 29<br>";
?>
