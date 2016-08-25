<?php
   $hash =
      array( '52233' => 'Hiawatha',
             '52302' => 'Marion',
             '52314' => 'Mt Vernon',
             '52328' => 'Robins',
             '52333' => 'Solon' );

   foreach ( $hash as $zip => $city )
   {
      printf( "City: %s &nbsp;
               Zip: %s<br>",
                 $city, $zip );
   }
?>
