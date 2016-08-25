<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../include/chapterFunct.inc.php" );

   $title = "PHP Examples";
   $subTitle = "Chapter Fourteen";

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

   chapterTableRow( "14.3", "setCookie.php" );
   chapterTableRow( "14.4", "destroyCookie.php" );
?>

   </table>

<?php
   $prevPage = "../chapter11";
   $prevTitle = "Chapter<br>Eleven";
   $prevTarget = "chapter11";
   $nextPage = "../chapter16";
   $nextTitle = "Chapter<br>Sixteen";
   $nextTarget = "chapter16";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
