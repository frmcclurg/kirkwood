<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Three";

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

   chapterTableRow( "3.4", "phpinfo.php" );
   chapterTableRow( "3.5", "helloWorld.html" );
   chapterTableRow( "3.6", "helloWorld.php" );
   chapterTableRow( "3.8", "comments.php" );
   chapterTableRow( "3.12", "nestedCmts.php" );
   chapterTableRow( "3.17", "varScope.php" );
   chapterTableRow( "3.19", "doubleQuote.php" );
   chapterTableRow( "3.20", "singleQuote.php" );
   chapterTableRow( "3.23", "concat.php" );
   chapterTableRow( "3.24", "constant.php" );
   chapterTableRow( "3.27", "predefConst.php" );
   chapterTableRow( "3.31", "ternary.php" );
   chapterTableRow( "3.33", "modulo.php" );
   chapterTableRow( "3.34", "assignOpAdd.php" );
   chapterTableRow( "3.35", "assignOpAll.php" );
   chapterTableRow( "3.36", "incOp.php" );
   chapterTableRow( "3.37", "decOp.php" );
   chapterTableRow( "3.39", "prePostOp.php" );
   chapterTableRow( "3.41", "typeCasting.php" );
   chapterTableRow( "3.42", "orderPrec.php" );
?>

   </table>

<?php
   $prevPage = "../..";
   $prevTitle = "PHP<br>Home";
   $prevTarget = "php";
   $nextPage = "../chapter04";
   $nextTitle = "Chapter<br>Four";
   $nextTarget = "chapter04";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
