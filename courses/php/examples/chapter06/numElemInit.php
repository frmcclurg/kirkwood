<?php
   $weekday[] = "Sunday";
   $weekday[] = "Monday";
   $weekday[] = "Tuesday";
   $weekday[] = "Wednesday";
   $weekday[] = "Thursday";
   $weekday[] = "Friday";
   $weekday[] = "Saturday";

   for ( $i = 0;
         $i < count($weekday);
         $i++ )
   {
      printf( "\$weekday[%d]:
                  %s<br>",
                 $i, $weekday[$i] );
   }

   echo "<br><br>";

   $week[0] = "Sunday";
   $week[1] = "Monday";
   $week[2] = "Tuesday";
   $week[3] = "Wednesday";
   $week[4] = "Thursday";
   $week[5] = "Friday";
   $week[6] = "Saturday";

   for ( $i = 0;
         $i < count($week);
         $i++ )
   {
      printf( "\$week[%d]:
                  %s<br>",
                 $i, $week[$i] );
   }
?>
