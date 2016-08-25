<pre>
<?php
   printf( "0;  // %s\n", 0 ? "true" : "false" );  // false
   printf( "1;  // %s\n", 1 ? "true" : "false" );  // true
   printf( "-1;  // %s\n", -1 ? "true" : "false" );  // true
   printf( "\$a = 0;  // %s\n", $a = 0 ? "true" : "false" );  // false
   printf( "\$a = 1;  // %s\n", $a = 1 ? "true" : "false" );  // true
   $a = 1;  // inline on previous line did not assign value to $a
   printf( "\$a == 1;  // %s\n", $a == 1 ? "true" : "false" );  // true
   printf( "\"1\" == 1;  // %s\n", "1" == 1 ? "true" : "false" );  // true
   printf( "\"1\" === 1;  // %s\n", "1" === 1 ? "true" : "false" );  // false
   printf( "'1' != 'A';  // %s\n", '1' != 'A' ? "true" : "false" );  // true
   printf( "\$a <> 2;  // %s (same as !=)\n", $a <> 2 ? "true" : "false" );  // true
?>
</pre>
