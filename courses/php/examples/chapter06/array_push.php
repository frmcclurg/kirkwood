<?php
   $obj = array( "rock" );

   array_push( $obj, "paper",
                     "scissors" );

   for ( $i = 0; $i < count($obj); $i++ )
      printf( "\$obj[%d]: %s<br>",
              $i, $obj[$i] );
?>
