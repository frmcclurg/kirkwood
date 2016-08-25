<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Six";

   $scriptCode = "
      <script language=\"JavaScript\">
         /**
          * @brief Dynamically load pages into a frame
          * @param frameName Id of the frame to load
          * @param pageName  URL path of the file to load
          * @date  February 21, 2009
          */
         function LoadFrame(frameName, pageName)
         {
            framePage = parent.document.getElementById(frameName);

            // load passed page into \"results\" frame for example
            framePage.src = pageName;
         }
      </script>";  // $scriptCode

   htmlHeader( $title, $subTitle, $scriptCode );
?>

   <table border="1" cellpadding="5" cellspacing="0" width="100%">

<?php
   chapterTableHeader( "Ref", "File", "Code", "Results" );

   chapterTableRow( "6.6",  "numElemInit.php" );
   chapterTableRow( "6.7",  "numArrayInit.php" );
   chapterTableRow( "6.9",  "forArray.php" );
   chapterTableRow( "6.12", "foreachArray.php" );
   chapterTableRow( "6.15", "hashElemInit.php" );
   chapterTableRow( "6.16", "hashArrayInit.php" );
   chapterTableRow( "6.18", "whileEach.php" );
   chapterTableRow( "6.21", "foreachHash.php" );
   chapterTableRow( "6.23", "hashZipCity.php" );
   chapterTableRow( "6.24", "hashKeyVar.php" );
   chapterTableRow( "6.24", "hashKeyOrder.php" );
   chapterTableRow( "6.25", "uniqueItems.php" );
   chapterTableRow( "6.27", "print_r.php" );
   chapterTableRow( "6.28", "var_dump.php" );
   chapterTableRow( "6.29", "var_export.php" );
   chapterTableRow( "6.31", "multiDimElem.php" );
   chapterTableRow( "6.31", "multiDimArray.php" );
   chapterTableRow( "6.32", "multiDimHash.php" );
   chapterTableRow( "6.33", "arrayOfArrays.php" );
   chapterTableRow( "6.34", "hashOfArrays.php" );
   chapterTableRow( "6.35", "hashOfHashes.php" );
   chapterTableRow( "6.36", "array_push.php" );
   chapterTableRow( "6.37", "array_pop.php" );
   chapterTableRow( "6.38", "array_unshift.php" );
   chapterTableRow( "6.39", "array_shift.php" );
   chapterTableRow( "6.40", "shuffle.php" );
   chapterTableRow( "6.41", "sort.php" );
   chapterTableRow( "6.42", "reverse.php" );
   chapterTableRow( "6.43", "splice.php" );
   chapterTableRow( "6.45", "array_walk.php" );
   chapterTableRow( "6.48", "scrambleStr.php" );
   chapterTableRow( "6.49", "scrambleWord.php" );
?>

   </table>

<?php
   $prevPage = "../chapter05";
   $prevTitle = "Chapter<br>Five";
   $prevTarget = "chapter05";
   $nextPage = "../chapter07";
   $nextTitle = "Chapter<br>Seven";
   $nextTarget = "chapter07";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
