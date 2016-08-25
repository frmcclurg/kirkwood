<?php
   function isLeapYear( $year )
   {
      if (((($year % 4) == 0) &&
           (($year % 100) != 0)) ||
           (($year % 400) == 0))
         $result = TRUE;
      else
         $result = FALSE;

      return( $result );
   }

   $yr = 2000;
   printf( "Year %d ", $yr );

   $status = isLeapYear( $yr ) ?
                "is" : "is not";

   printf( "%s a leap year",
              $status );
?>
