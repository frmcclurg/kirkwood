<?php
   function unfalse()
   {
      printf( "unfalse()
         Never Called<br>" );
      return( TRUE );
   }

   function untrue()
   {
      printf( "untrue()
         Never Called<br>" );
      return( FALSE );
   }

   $a = ( FALSE && unfalse() );
   var_dump($a);  // bool(FALSE)
   echo "<br>";

   $b = ( FALSE AND unfalse() );
   var_dump($b);  // bool(FALSE)
   echo "<br>";

   $c = ( TRUE || untrue() );
   var_dump($c);  // bool(TRUE)
   echo "<br>";

   $d = ( TRUE OR untrue() );
   var_dump($d);  // bool(TRUE)
?>
