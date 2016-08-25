<?php
   // array with months sorted
   $sorted = array( "jan", "feb", "mar",
                    "apr", "may", "jun",
                    "jul", "aug", "sep",
                    "oct", "nov", "dec" );
 
   $year = 1960;  // leap year
   $thirty = array( 'sep', 'apr',
                    'jun', 'nov' );

   $thirtyOne = array( 'jan', 'mar',
                       'may', 'jul',
                       'aug', 'oct',
                       'dec' );

   // initialize 30 day months
   foreach( $thirty as $name )
      $month[$name] = 30;

   // initialize 31 day months
   foreach( $thirtyOne as $name )
      $month[$name] = 31;

   // initialize leap year month
   // $month['feb'] = isLeapYear( $year ) ? 29 : 28;
   $month['feb'] = 29;

   // how would you print out months in order?
   foreach ( $sorted as $name )
   {
      printf( "%s has %d days<br>",
                 $name, $month[$name] );
   }
?>
