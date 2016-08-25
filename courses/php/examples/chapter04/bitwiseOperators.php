<?php
   $a = 3;
   $b = 5;

   if ( TRUE | ++$a )  // not short-circuit
   {
      printf( "Always reached<br>" );
      printf( "\$a = %d<br>", $a ); // 4
   }

   if ( FALSE & --$b )  // not short-circuit
   {
      printf( "Never reached<br>" );
   }

   printf( "\$b = %d<br>", $b );  // 4
?>

