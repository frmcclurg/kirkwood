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
   $subTitle = "Recipe Application";

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

   chapterTableRow( "login.php" );
   chapterTableRow( "login.md5.php" );
   chapterTableRow( "login.sha1.php" );
   chapterTableRow( "login.hash.php" );
   chapterTableRow( "login.crypt.php" );

?>

   </table>

   <br><br> <br>

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
