<pre>
<?php
   printf( "// init for every statement" );
   printf( "<br><br>" );

   // prefix operators
   $a = $b = 4;  // init $a and $b
   $a = ++$b; // $a=5  $b=5
   printf( "// prefix operators<br>" );
   printf( "\$a = ++\$b;" );
   printf( "  // \$a=%d  \$b=%d<br>",
      $a, $b );

   $a = $b = 4;  // init $a and $b
   $a = --$b; // $a=3  $b=3
   printf( "\$a = --\$b;" );
   printf( "  // \$a=%d  \$b=%d<br>",
      $a, $b );

   printf( "<br><br>" );

   // postfix operator (side effects)
   $a = $b = 4;  // init $a and $b
   $a = $b++; // $a=4  $b=5
   printf( "// postfix operator" );
   printf( " (side effects)<br>" );
   printf( "\$a = \$b++;" );
   printf( "  // \$a=%d  \$b=%d<br>",
      $a, $b );

   $a = $b = 4;  // init $a and $b
   $a = $b--; // $a=4  $b=3
   printf( "\$a = \$b--;" );
   printf( "  // \$a=%d  \$b=%d<br>",
      $a, $b );
?>
</pre>
