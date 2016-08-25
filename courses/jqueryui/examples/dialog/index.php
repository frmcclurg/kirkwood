<?php
/**
 * @file   dialog/index.php
 *
 * @brief  jQuery popup dialog
 * @author Fred R. McClurg
 * @since  May 31, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );

   $title = "dialog: Flexible jQuery Alert Alternative";
   $description = "jQuery's version of a dialog that allows HTML tags";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
   $headCode = <<< ENDCODE
<head>
   <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/pepper-grinder/jquery-ui.css" rel="stylesheet">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

   <script>
      $(function() {
         $( "#dialog-confirm" ).dialog({
            modal: false,
            autoOpen: false,
            buttons: {
               "Ok": function() {
                  $( this ).dialog( "close" );
               },
               Cancel: function() {
                  $( this ).dialog( "close" );
               }
            }
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
<div id="dialog-confirm"
     title="Thermonuclear Alert Dialog">
   <p>
      <img src="images/64x64/warnRed.png"
           style="float:left; margin:0 7px 7px 0;">
      </span>

      <p>
         Iowa City is a "<em>Nuclear Free Zone</em>".
      </p>

      <p>
         <strong>
            Is it okay to terminate the cancellation of the launch
            of a thermonuclear weapon upon Iowa City?</strong>
      </p>
   </p>
</div>

<button type="button"
        onClick="$('#dialog-confirm').dialog('open');">
   Press button to open dialog
</button>
ENDCODE;

   printf( "%s", $bodyCode );

   printf( "<br><br><br><hr>" );
   printf( "<h2>Code Snippet</h2>" );
   PrintCodeSyntaxSnippet( $headCode, "javascript" );

   printf( "<br><br>" );
   PrintCodeSyntaxSnippet( $bodyCode, "html" );
?>

</body>
</html>
