<?php
   $money = 500;

   printf( "Change: $%.02f", 
      $money / 100 );

   switch ( $money )
   {
      case 1000 :
      case 500 :
      case 100 :
         printf( " bill" );
         break;
      case 25 :
      case 10 :
      case 5 :
      case 1 :
         printf( " coin" );
         break;
      default :
         printf( "Can't process" );
   }
?>
