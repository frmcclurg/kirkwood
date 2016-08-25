<nobr>
<?php
   function foo()
   {
      printf( "File: %s<br>", __FILE__ );
      printf( "Line: %d<br>", __LINE__ );
      printf( "Funct: %s", __FUNCTION__ );
   }

   foo();
?>
</nobr>
