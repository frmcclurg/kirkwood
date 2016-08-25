<?php
   /**
    * @brief Prints table header
    * @param $ref Header string for reference column
    * @param $file Header string for file column
    * @param $code Header string for code column
    * @param $results Header string for results column
    */
   function PrintTableHeader( $ref, $file, $code, $results )
   {
      printf( "
      <tr bgcolor=\"#D4D4FF\">
         <th>
            $ref
         </th>
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
   }  // PrintTableHeader();

   /**
    * @brief Prints table header
    * @param $section Section number reference from slide
    * @param $directory Directory of file
    * @param $file File name containing code
    */
   function PrintTableRow( $section, $directory, $file )
   {
      printf( "
      <tr>
         <td>  <!-- Ref -->
            %s
         </td>
         <td>  <!-- File -->
            %s
         </td>
         <td>  <!-- Code -->
            <a href=\"%s/%s.html\"
               onClick=\"LoadFrame( 'results', 'blank.html' );\"
               target=\"code\">Code</a>
         </td>
         <td>  <!-- Results -->
            <a href=\"%s/%s\"
               onClick=\"LoadFrame( 'code', '%s/%s.html' );\"
               target=\"results\">Results</a>
         </td>
      </tr>\n",
         $section,
         $file,
         $directory, $file,
         $directory, $file,
         $directory, $file );
   }  // PrintTableRow();
?>

<html>
   <head>
      <title>
         Class Examples
      </title>

      <!-- Author:  Fred R. McClurg -->
      <!-- Created: January 31, 2009 -->

      <script language="JavaScript">
         /**
          * @brief Dynamically load pages into a frame
          * @param frameName Id of the frame to load
          * @param pageName  URL path of the file to load
          * @date  February 21, 2009
          */
         function LoadFrame(frameName, pageName)
         {
            framePage = parent.document.getElementById(frameName);

            // load passed page into "results" frame for example
            framePage.src = pageName;
         }
      </script>

   </head>

   <body>

   <h2>Chapter Three</h2>

   <table border="1" cellpadding="5" cellspacing="0" width="100%">

<?php
   PrintTableHeader( "Ref", "File", "Code", "Results" );
   PrintTableRow( "3.3", "chapter03", "phpinfo.php" );
   PrintTableRow( "3.4", "chapter03", "helloWorld.html" );
   PrintTableRow( "3.5", "chapter03", "helloWorld.php" );
   PrintTableRow( "3.6", "chapter03", "comments.php" );
   PrintTableRow( "3.10", "chapter03", "nestedComments.php" );
   PrintTableRow( "3.15", "chapter03", "varScope.php" );
   PrintTableRow( "3.17", "chapter03", "doubleQuote.php" );
   PrintTableRow( "3.18", "chapter03", "singleQuote.php" );
?>

   </table>

   <br><br> <br>


   <h2>Chapter Four</h2>

   <table border="1" cellpadding="5" cellspacing="0" width="100%">

<?php
   PrintTableHeader( "Ref", "File", "Code", "Results" );
   PrintTableRow( "4.3", "chapter04", "whatIsTruth.php" );
   PrintTableRow( "4.10", "chapter04", "truthTable.php" );
   PrintTableRow( "4.12", "chapter04", "shortCircuit.php" );
   PrintTableRow( "4.13", "chapter04", "concat.php" );
   PrintTableRow( "4.14", "chapter04", "constant.php" );
   PrintTableRow( "4.16", "chapter04", "predefConst.php" );
   PrintTableRow( "4.18", "chapter04", "modulo.php" );
   PrintTableRow( "4.19", "chapter04", "assignOpAdd.php" );
   PrintTableRow( "4.20", "chapter04", "assignOpAll.php" );
   PrintTableRow( "4.21", "chapter04", "incOp.php" );
   PrintTableRow( "4.22", "chapter04", "decOp.php" );
   PrintTableRow( "4.23", "chapter04", "incDec.php" );
   PrintTableRow( "4.26", "chapter04", "ternary.php" );
   PrintTableRow( "4.27", "chapter04", "dataType.php" );
   PrintTableRow( "4.17", "chapter04", "ifPitfalls.php" );
   PrintTableRow( "4.20", "chapter04", "elsePitfall.php" );
   PrintTableRow( "4.21", "chapter04", "elseIf.php" );
   PrintTableRow( "4.26", "chapter04", "switch.php" );
   PrintTableRow( "4.29", "chapter04", "whileGuessNum.php" );
   PrintTableRow( "4.30", "chapter04", "whileHighLow.php" );
   PrintTableRow( "4.32", "chapter04", "doWhile.php" );
   PrintTableRow( "4.36", "chapter04", "for.php" );
   PrintTableRow( "4.37", "chapter04", "forMultiIndex.php" );
   PrintTableRow( "4.38", "chapter04", "break.php" );
   PrintTableRow( "4.39", "chapter04", "continue.php" );
   PrintTableRow( "4.?", "chapter04", "compareStr.php" );
?>

   </table>

   <br><br> <br>

   </body>
</html>
