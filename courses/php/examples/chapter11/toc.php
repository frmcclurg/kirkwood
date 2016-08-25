<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Eleven";

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

   chapterTableRow( "GLOBALS.php" );
   chapterTableRow( "ENV1.php" );
   chapterTableRow( "ENV2.php" );
   chapterTableRow( "SERVER.php" );
   chapterTableRow( "search.html" );
   chapterTableRow( "GET.php" );
   chapterTableRow( "POST.php" );
   chapterTableRow( "REQUEST.php" );
   chapterTableRow( "searchError.php" );
   chapterTableRow( "search.php" );
   chapterTableRow( "search.isset.php" );
   chapterTableRow( "searchEcho.php" );
   chapterTableRow( "multiWrong.php" );
   chapterTableRow( "multiRight.php" );
   chapterTableRow( "multiSelect.php" );
   chapterTableRow( "tempConvert.php" );
   chapterTableRow( "multiConvert.php" );
?>

   </table>

<?php
   $prevPage = "../chapter10";
   $prevTarget = "chapter10";
   $prevTitle = "Chapter<br>Ten";
   $nextPage = "../recipe01";
   $nextTarget = "recipe01";
   $nextTitle = "Recipe<br>One";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
