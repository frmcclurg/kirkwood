<?php
/**
 * @file table.inc.php
 */

/**
 * @brief Displays a table header
 * @param $columns Array of table headings
 */
function PrintTableHeader( $columns )
{
   $bgColor = "#b4cdcd"; // LightCyan3
   $fgColor = "#ffffff"; // White

   printf( "<table
               border='1'
               cellpadding='5'
               cellspacing='0'>\n" );

   printf( "<tr bgcolor='%s'
                style='color: %s'>\n",
                   $bgColor,
                   $fgColor );

   foreach ( $columns as $name )
      printf( "<th> %s </th>\n", $name );

   printf( "</tr>\n" );

}  // function PrintTableHeader();


/**
 * @brief Displays a table row
 * @param $row Hash table cells
 */
function PrintTableRow( $row )
{
   static $rowCount = 0;
   $fgColor = "#000000"; // Black

   if ( $rowCount % 2 )  // not even
      $bgColor = "#d1eeee"; // LtCyan2
   else
      $bgColor = "#e0ffff"; // LtCyan

   printf( "<tr valign='top'
                bgcolor='%s'
                style='color: %s'>\n",
                   $bgColor,
                   $fgColor );

   foreach ( $row as $key => $value )
      printf( "<td> %s </td>\n",
                 $row[$key] );

   printf( "</tr>\n" );

   // prep for next iteration
   $rowCount++;

}  // function PrintTableRow();
?>
