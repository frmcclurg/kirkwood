<?php
   $count = 4;
   $name = "cact";

   // make singular/plural by appending
   $name .= ($count == 1) ? "us" : "i";

   // make singular/plural by assignment
   $verb = ($count == 1) ? "is" : "are";
   $plural = ($count != 1) ? "s" : "";

   printf( "There %s %d %s plant%s.",
           $verb, $count, $name, $plural );
?>
