<?php
   /**
    * @brief Prints table header
    * @param $file Header string for file column
    * @param $code Header string for code column
    * @param $results Header string for results column
    */
   function chapterTableHeader( $file, $code, $results )
   {
      printf( "
      <tr bgcolor=\"#D4D4FF\">
         <th>
            $file
         </th>
         <th>
            $code
         </th>
         <th>
            $results
         </th>
      </tr>\n" );
   }  // function chapterTableHeader();

   /**
    * @brief Prints table header
    * @param $file File name containing code
    */
   function chapterTableRow( $file )
   {
      printf( "
      <tr>
         <td>  <!-- File -->
            %s
         </td>
         <td>  <!-- Code -->
            <a href=\"%s.html\"
               onClick=\"LoadFrame( 'results', 'blank.html' );\"
               target=\"code\">Code</a>
         </td>
         <td>  <!-- Results -->
            <a href=\"%s\"
               onClick=\"LoadFrame( 'code', '%s.html' );\"
               target=\"results\">Results</a>
         </td>
      </tr>\n",
         $file,
         $file,
         $file,
         $file );
   }  // function chapterTableRow();
?>
