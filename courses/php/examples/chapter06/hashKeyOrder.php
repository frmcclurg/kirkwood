<pre>
<?php
   /**
    * @brief Without using a
    *    foreach, this example
    *    uses a several built-in
    *    array functions to create
    *    a hash of months with the
    *    name as the key and days
    *    in month length as the
    *    value.
    *
    * @details Programmatically
    *    create a hash with the
    *    following definition:
    *
    *    $daysInMon =
    *       array( 'sep' => 30,
    *              ...,
    *              'jan' => 31,
    *              ...,
    *              'feb' => 28 );
    *
    * Print the hash in month
    * order: jan, feb, mar ...
    * using a variable as the
    * hash key in a foreach
    * loop.
    */

   /*
    * Method: One
    * Create hash with 30 day months
    *
    *    $hash30 =
    *       array( 'sep' => 30,
    *              ... );
    */

   // init array with 30 day months
   $key30 = array( 'sep', 'apr',
                   'jun', 'nov' );

   // determine last element of array
   $key30Len = count( $key30 );

   // create array with same value
   $value30 = array_fill( 0,
                          $key30Len,
                          30 );

   // create hash using array of keys
   // and array of values
   $hash30 = array_combine( $key30,
                            $value30 );


   /*
    * Method: Two
    * Create hash with 31 day months
    *
    *    $hash31 =
    *       array( 'jan' => 31,
    *              ... );
    */

   // init array with 31 day months
   $key31 = array( 'jan', 'mar',
                   'may', 'jul',
                   'aug', 'oct',
                   'dec' );


   // create hash via array of keys
   // & initial value
   // array_fill_keys version 5.2+
   // $hash31 = array_fill_keys( $key31, 31 );
   $hash31 = array_combine( $key31, 
                array_fill( 0, count($key31), 31 ) );

   /*
    * combine 30 day hash and 31 day
    * hash together
    */
   $daysInMon = array_merge( $hash30,
                             $hash31 );

   // don't forget february
   // change line every leap year
   $daysInMon['feb'] = 28;

   // define the month order
   $month = array( 'jan', 'feb',
                   'mar', 'apr',
                   'may', 'jun',
                   'jul', 'aug',
                   'sep', 'oct',
                   'nov', 'dec' );

   printf( "<br><br>" );
   foreach ( $month as $name )
   {
      printf( "\$daysInMon['%s']: %d<br>",
               $name, $daysInMon[$name] );
   }
?>
</pre>
