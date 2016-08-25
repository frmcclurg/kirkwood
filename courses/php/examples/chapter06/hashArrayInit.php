<?php
   $user = array( 'mluther' => 'Martin',
                  'bgraham' => 'Billy',
                  'dlmoody' => 'D.L.',
                  'jwesley' => 'John' );

   foreach ( $user as $uname => $fname )
   {
      printf( "Username: %s &nbsp;
               First: %s<br>",
                 $uname, $fname );
   }
?>
