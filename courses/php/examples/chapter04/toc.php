<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Four";

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

   chapterTableRow( "4.3", "relationalOp.php" );
   chapterTableRow( "4.14", "ifExample.php" );
   chapterTableRow( "4.15", "ifExMore.php" );
   chapterTableRow( "4.16", "ifExStillMore.php" );
   chapterTableRow( "4.17", "ifPitfalls.php" );
   chapterTableRow( "4.18", "ifPitfallMore.php" );
   chapterTableRow( "4.19", "whatIsTruth.php" );
   chapterTableRow( "4.20", "shortCircuit.php" );
   chapterTableRow( "4.23", "elseStmt.php" );
   chapterTableRow( "4.24", "elsePitfall.php" );
   chapterTableRow( "4.25", "elsePitFix.php" );
   chapterTableRow( "4.28", "elseIf.php" );
   chapterTableRow( "4.30", "ternary.php" );
   chapterTableRow( "4.33", "switch.php" );
   chapterTableRow( "4.38", "whileGuessNum.php" );
   chapterTableRow( "4.40", "whileCount.php" );
   chapterTableRow( "4.42", "whileHighLow.php" );
   chapterTableRow( "4.46", "yahtzee.php" );
   chapterTableRow( "4.48", "doWhileCount.php" );
   chapterTableRow( "4.51", "forExample.php" );
   chapterTableRow( "4.53", "forIfMulti.php" );
   chapterTableRow( "4.54", "forIncMulti.php" );
   chapterTableRow( "4.55", "forMultiIx.php" );
   chapterTableRow( "4.56", "breakLoop.php" );
   chapterTableRow( "4.57", "breakMulti.php" );
   chapterTableRow( "4.58", "breakTrace.php" );
   chapterTableRow( "4.59", "contLoop.php" );
   chapterTableRow( "4.60", "contMulti.php" );
   chapterTableRow( "4.61", "contTrace.php" );
?>

   </table>

<?php
   $prevPage = "../chapter03";
   $prevTitle = "Chapter<br>Three";
   $prevTarget = "chapter03";
   $nextPage = "../chapter05";
   $nextTitle = "Chapter<br>Five";
   $nextTarget = "chapter05";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
