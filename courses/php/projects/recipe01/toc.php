<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
   require_once( "../../examples/include/chapterFunct.inc.php" );

   function winexec($cmd)
   {
      $WshShell = new COM("WScript.Shell");
      $oExec = $WshShell->Run($cmd, 0, false);
      echo $cmd;
      return $oExec == 0 ? true : false;
   }

   $title = "Class Project";
   $subTitle = "Recipe One";

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
   chapterTableHeader( "File", "Code", "Results" );

   chapterTableRow( "webParts.html" );
   chapterTableRow( "recipe01.zip" );

   chapterTableRow( "sql/cookbookdb.sql" );

   chapterTableRow( "search.html" );
   chapterTableRow( "delete.html" );
   chapterTableRow( "create.html" );

   chapterTableRow( "css/common.css" );

   chapterTableRow( "js/utility.js" );

   chapterTableRow( "include/errors.php" );
   chapterTableRow( "include/login.php" );
   chapterTableRow( "include/table.php" );
   chapterTableRow( "include/form.php" );

   chapterTableRow( "search.01.php" );
   chapterTableRow( "search.02.php" );
   chapterTableRow( "search.03.php" );
   chapterTableRow( "search.04.php" );
   chapterTableRow( "search.05.php" );
   chapterTableRow( "search.06.php" );
   chapterTableRow( "search.07.php" );
   chapterTableRow( "search.08.php" );
   chapterTableRow( "search.09.php" );
   chapterTableRow( "search.10.php" );
   chapterTableRow( "search.11.php" );
   chapterTableRow( "search.12.php" );
   chapterTableRow( "search.13.php" );

   chapterTableRow( "search.php" );
   chapterTableRow( "delete.php" );
?>

   </table>

   <br><br>

<?php
   $prevPage = "../chapter14";
   $prevTarget = "chapter14";
   $prevTitle = "Chapter<br>Fourteen";
   $nextPage = "../chapter03";
   $nextTarget = "chapter03";
   $nextTitle = "Chapter<br>Three";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
