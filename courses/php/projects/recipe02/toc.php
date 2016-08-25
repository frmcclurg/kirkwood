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
   $subTitle = "Recipe Two";

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

   chapterTableRow( "recipe02.zip" );

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

   chapterTableRow( "create.01.php" );
   chapterTableRow( "create.02.php" );
   chapterTableRow( "create.03.php" );
   chapterTableRow( "create.04.php" );
   chapterTableRow( "create.05.php" );
   chapterTableRow( "create.06.php" );
   chapterTableRow( "create.07.php" );
   chapterTableRow( "create.08.php" );
   chapterTableRow( "create.09.php" );
   chapterTableRow( "create.10.php" );
   chapterTableRow( "create.11.php" );
   chapterTableRow( "create.12.php" );
   chapterTableRow( "create.13.php" );
   chapterTableRow( "create.14.php" );
   chapterTableRow( "create.15.php" );
   chapterTableRow( "create.16.php" );

   chapterTableRow( "search.php" );
   chapterTableRow( "delete.php" );
   chapterTableRow( "create.php" );
?>

   </table>

   <p />

<?php
   $prevPage = "../chapter14";
   $prevTarget = "chapter14";
   $prevTitle = "Chapter<br />Fourteen";
   $nextPage = "../chapter03";
   $nextTarget = "chapter03";
   $nextTitle = "Chapter<br />Three";

   htmlFooter( $title, $subTitle,
               $prevPage, $prevTitle, $prevTarget,
               $nextPage, $nextTitle, $nextTarget );
?>
