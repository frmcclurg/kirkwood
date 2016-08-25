<?php
   $year = 1960;
   $month = 'June';
   printf( "%s %d has ",
           $month, $year );

   switch ( $month )
   {
      case 'September' :
      case 'April' :
      case 'June' :
      case 'November' :
         $len = 30;
         break;
      case 'February' :
         $len = isLeapYear($year) ? 29 : 28;
         break;
      default :
         $len = 31;
   }

   printf( "%d days", $len );
?>
