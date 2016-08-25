<?php
   /**
    * @file       primeFunctions.php
    * @brief      Collection of functions related solving prime numbers
    * @author     Fred R. McClurg
    * @date       February 6, 2010
    * @addtogroup phpPrime    PHP Prime Number Functions
    * @{
    */


   /**
    * @brief   Displays a table containing all the values in a range.
    * @author  Fred R. McClurg
    * @date    February 6, 2010
    *
    * @param   $maxValue     Max value of numbers in the range.
    */
   function PrintSieveTable( $maxValue )
   {
      WhereAmI( __FUNCTION__, __FILE__, __LINE__ );

      $count = 0;
      $cellWidth = 40;
      $rows = ceil( sqrt( $maxValue + 1 ) );  // count zero
      $columns = round( sqrt( $maxValue + 1 ) );  // count zero

      $totalWidth = $totalHeight = $columns * $cellWidth;

      printf( "<br><br>\n" );
      printf( "<table border=\"1\"
                      cellspacing=\"0\"
                      align=\"center\"
                      width=\"%d\"
                      height=\"%d\"
                      class=\"sieve\">\n", $totalWidth, $totalHeight );

      for ( $j = 0; $j < $columns; $j++ )
      {
         printf( "   <col width=\"%d\">\n", $cellWidth );
      }

      for ( $i = 0; $i < $rows; $i++ )
      {
         printf( "   <tr class=\"row\">\n" );

         for ( $j = 0; $j < $columns; $j++ )
         {
            printf( "      <th class=\"cell\" id=\"cell%d\">\n", $count );

            if ( ( $count < 2 ) ||  // prime not defined
                 ( $count > $maxValue ) )  // number outside of specified
            {
               $cellContent = "&nbsp;";
            }
            else
            {
               $cellContent = $count;
            }

            printf( "<div class=\"number\">%s</div>
                     <div class=\"slash\" id=\"div%d\">%s</div>\n",
                        $cellContent, $count, "&nbsp;" );

            printf( "</th>\n" );

            $count++;
         }

         printf( "</tr>\n" );
      }

      printf( "</table>\n" );
   }   //  function PrintSieveTable()

/** @} */
?>
