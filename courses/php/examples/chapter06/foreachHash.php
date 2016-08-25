<?php
   $color = array( "red" => "#FF0000",
                   "green" => "#00FF00",
                   "blue" => "#0000FF" );

   foreach ( $color as $key => $val )
   {
      printf( "\$color['%s']: %s<br>",
         $key, $val );
   }
?>
