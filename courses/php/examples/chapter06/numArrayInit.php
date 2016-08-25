<?php
   $weekday = array(
      "Sunday", "Monday",
      "Tuesday", "Wednesday",
      "Thursday", "Friday",
      "Saturday" );

   for ( $i = 0; $i < count($weekday); $i++ )
   {
      printf( "\$weekday[%d]: %s<br>",
                 $i, $weekday[$i] );
   }
?>
