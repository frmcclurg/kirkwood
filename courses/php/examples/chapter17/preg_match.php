<?php
   $subject = "Jack and Jill went up the hill.";
   $pattern = '/jack|jill/i';

   if ( preg_match( $pattern, $subject ) )
   {
      printf( "Regular expression matched." );
   }
?>