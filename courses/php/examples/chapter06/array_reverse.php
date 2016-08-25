<?php
   $name = "rumpelstiltskin";

   // convert string to array
   $pieces = str_split( $name );

   // reverse the array order
   $reverse = array_reverse( $pieces );

   // convert array back to string
   $backward = implode( "", $reverse );

   echo $backward;
?>
