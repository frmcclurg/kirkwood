<?php
   function initialize( $key, $value )
   {
      // define global variable
      $GLOBALS[$key] = $value;
   }

   initialize( "foo", "It's every where!" );
   echo( $GLOBALS["foo"] );
?>
