<?php
   // function declaration
   function sinc( $in )
   {
      if ( $in == 0 )
      {
         $out = 1;
      }
      else
      {
         $out = sin( $in ) / $in;
      }

      return( $out );
   }  // end function sinc()

   $x = sinc( 10 ); // function call
   echo $x;
?>
