<?php
/**
 * @file   showHideToggle.php
 *
 * @brief  Illustrate jQuery show, hide and toggle functions
 * @author Fred R. McClurg
 * @since  May 28, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );

   $title = "Show, Hide and Toggle";
   $description = "Illustrates jQuery show, hide and toggle functions";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
   $headCode = <<< ENDCODE
<head>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> -->
   <!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script> -->
   <!-- <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.7.2.min.js"></script> -->
   <!-- <script type="text/javascript" src="../jquery/jquery-1.7.2.min.js"></script> -->

   <script type="text/javascript">
      $(document).ready(function() {
         $('#hideButton').click(function() {
           $('div.showHideToggle').hide();
         });

         $('#showButton').click(function() {
           $('div.showHideToggle').show();
         });

         $('#toggleButton').click(function() {
           $('div.showHideToggle').toggle();
         });
      });
   </script>
</head>
ENDCODE;

   printf( "%s", $headCode );
?>

<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<h2>
   Purpose
</h2>

<p>
   <?= $description ?>
</p>

<?php
   $bodyCode = <<< ENDCODE
<form>
   <button type="button"
            id="hideButton">
      Hide Message
   </button>

   <button type="button"
            id="showButton">
      Show Message
   </button>

   <button type="button"
            id="toggleButton">
      Toggle Message
   </button>
</form>

<br><br>

<div class="showHideToggle">
   Now you see me
</div>

<div class="showHideToggle" 
      style="display: none;">
   Now you don't
</div>
ENDCODE;

   printf( "%s", $bodyCode );

   printf( "<br><br><br><hr>" );
   printf( "<h2>Code Snippet</h2>" );
   PrintCodeSyntaxSnippet( $headCode, "javascript", false, 7 );

   printf( "<br><br>" );
   PrintCodeSyntaxSnippet( $bodyCode, "html", false, 42 );
?>

</body>
</html>
