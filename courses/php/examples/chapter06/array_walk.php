<?php
   function printRow( $value, $key )
   {
      static $evenOdd = 0;

      if ( $evenOdd % 2 )
         $bgColor = "#9999CC";
      else
         $bgColor = "#CCCCFF";

      printf( "
         <tr bgcolor='$bgColor'
             style='color: $value'>
            <td> $key </td>
            <td> $value </td>
         </tr>\n" );

      $evenOdd++;
   }

   $color =
      array( 'Red' => '#FF0000',
             'Green' => '#00FF00',
             'Blue' => '#0000FF',
             'Yellow' => '#FFFF00' );

   printf( "<table border='1'>\n" );
   array_walk( $color, 'printRow' );
   printf( "</table>\n" );
?>
