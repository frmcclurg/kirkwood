<?php
   $color = array( "red" => "#FF0000",
                   "green" => "#00FF00",
                   "blue" => "#0000FF" );

   while ( list($key, $val) = each($color) )
   {
      printf( "\$color['%s']: %s<br>",
         $key, $val );
   }
?>
