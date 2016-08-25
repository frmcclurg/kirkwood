<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Ten";

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

   chapterTableRow( "login.inc.php" );
   chapterTableRow( "fetch_row.php" );
   chapterTableRow( "fetch_assoc.php" );
   chapterTableRow( "cookbookdb.sql" );
   chapterTableRow( "list.1.php" );
   chapterTableRow( "list.2.php" );
   chapterTableRow( "list.3.php" );
   chapterTableRow( "list.4.php" );
   chapterTableRow( "table.inc.php" );
?>

   </table>

<?php
   $prevPage = "../chapter09";
   $prevTitle = "Chapter<br>Nine";
   $prevTarget = "chapter09";
   $nextPage = "../chapter11";
   $nextTitle = "Chapter<br>Eleven";
   $nextTarget = "chapter11";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
