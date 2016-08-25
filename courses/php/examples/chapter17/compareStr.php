<pre>
<?php
   if ( "Fred" == "Fred" )
      echo( "Access granted\n" );

   if ( "Fred" != "Fred" )
      echo( "Access denied\n" );

   // case sensitive
   if ( strcmp( "Fred", "Fred" ) == 0 )
      echo( "Access granted\n" );

   // case sensitive
   if ( ! strcmp( "Fred", "Fred" ) )
      echo( "Access granted\n" );

   // ignore case
   if ( strcasecmp( "Fred", "FRED" ) == 0 )
      echo( "Access granted\n" );
?>
</pre>
