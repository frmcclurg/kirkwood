<?php
/**
 * @file   index.php
 *
 * @brief  Index page for jQuery Chapter One
 * @author Fred R. McClurg
 * @since  May 28, 2012
 */

   $h1 = "jQuery Examples";
   $h2 = "Chapter One";
   $h3 = "Techie Boot Camp";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $h3 ?>: <?= $h1 ?>: <?= $h2 ?></title>

   <meta name="description"
      content="These are the examples to the jQuery Techie Boot Camp course.">

   <meta name="keywords"
      content="jQuery, course, training, overview, script, scripting, web, language, 
               example, examples">
   
<?php 
   include_once("../../../../common/js/googleAnalytics.js");
?>

	<link rel="stylesheet" type="text/css" href="../../../../common/css/global.css">
</head>

<!-- ------------------------------------------------------------------ -->
<!-- Name:     index.html                                               -->
<!-- Created:  May 20, 2012                                            -->
<!-- Author:   Fred R. McClurg                                          -->
<!-- Favorite: http://www.livingwaters.com/good/                        -->
<!-- ------------------------------------------------------------------ -->

<body bgcolor="#ffffff">

<h3 align="center"><?= $h3 ?></h3>
<h1 align="center"><?= $h1 ?></h1>
<h2 align="center"><?= $h2 ?></h2>

<img src="../../../../common/images/pixels/ccccff.png" border=0 height=4 width="100%">

<br><br>

<dl>
<?php 
   $fileNames = array( 
	   "cssSelector.php" => "jQuery selector and CSS function",
	   "showHideToggle.php" => "Show, Hide and Toggle Content",
	   // "dynamicSelectOptions.php" => "Jump to URL upon selecting dropdown list",
   		 );
   
   foreach( $fileNames as $file => $title )
   {
      printf( "<dt> <img src='../../../../common/images/icons/balls/16x16/ffff00.png'>\n" );
      printf( "   <a href='%s'>%s</a> <br><br>", $file, $title );
   }
?>
</dl>

<br><br>
<hr>
<br><br>

<table width="100%">
   <tr>
      <td width="10" valign="middle">
         <address>
            <nobr>Fred R. McClurg,</nobr>
         </address>
      </td>

      <td valign="bottom">
         <a href='mailto:%22Fred R. McClurg%22 %3C%6D%63%63%6C%75%72%67%40%6D%63%68%73%69%2E%63%6F%6D%3E?subject=Techie Boot Camp: Table of Contents&body=Dear Fred R. McClurg:%0D%0A%0D%0A...%0D%0A'>
         <img src="../../../../common/images/icons/emailAddress.png" border="0"></a>
      </td>

      <td align="right" valign="middle" nowrap>
         <font size=2>
            Last Modified:
         </font>
      </td>

      <td width="10" valign="middle">
         <nobr>
         <font size=2>
            <?=
	            date( "F d Y H:i:s", getlastmod() );
            ?>
         </font>
         </nobr>
      </td>
   </tr>

   <tr>
      <td colspan=4 align="center" class="copyright">
         Copyright &copy; <?= date("Y"); ?> &nbsp;
         Fred R. McClurg &nbsp;
         All Rights Reserved.
      </td>
   </tr>
</table>

</body>
</html>
