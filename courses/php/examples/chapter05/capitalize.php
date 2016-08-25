<?php
   function capitalize( $str,
                        $allCaps = TRUE )
   {
      if ( $allCaps )  // default
      {
         $str = strtoupper( $str );
      }
      else
      {
         $str = strtolower( $str );
         $str = ucwords( $str );
      }

      return( $str );
   }

   $origStr = "hElLo wOrLd";

   printf( "Original: %s<br>",
            $origStr );

   $newStr = capitalize( $origStr );

   printf( "No default: %s<br>",
            $newStr );

   $newStr = capitalize( $origStr,
                         FALSE );

   printf( "False all caps: %s<br>",
            $newStr );
?>
