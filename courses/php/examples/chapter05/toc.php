<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Five";

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

   chapterTableRow( "5.7", "isLeapYear.php" );
   chapterTableRow( "5.7", "sincFunc.php" );
   chapterTableRow( "5.9", "f2cFunc.php" );
   chapterTableRow( "5.9", "capitalize.php" );
   chapterTableRow( "5.10", "myLog.php" );
   chapterTableRow( "5.11", "static.php" );
   chapterTableRow( "5.15", "passByVal.php" );
   chapterTableRow( "5.18", "passByRef.php" );
   chapterTableRow( "5.21", "swap.php" );
   chapterTableRow( "5.24", "functions.php" );
   chapterTableRow( "5.24", "include.php" );
   chapterTableRow( "5.26", "math.php" );
   chapterTableRow( "5.26", "misc.php" );
   chapterTableRow( "5.26", "html.php" );
   chapterTableRow( "5.26", "db.php" );
   chapterTableRow( "5.26", "include_once.php" );
?>

   </table>

<?php
   $prevPage = "../chapter04";
   $prevTitle = "Chapter<br>Four";
   $prevTarget = "chapter04";
   $nextPage = "../chapter06";
   $nextTitle = "Chapter<br>Six";
   $nextTarget = "chapter06";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
