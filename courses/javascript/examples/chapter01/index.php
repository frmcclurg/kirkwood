<?php
/**
 * @file   index.php
 *
 * @brief  Index page for Chapter One
 * @author Fred R. McClurg
 * @since  May 19, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $h1 = "JavaScript Examples";
   $h2 = "Chapter One";
   $h3 = "Techie Boot Camp";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $h3 ?>: <?= $h1 ?>: <?= $h2 ?></title>

   <meta name="description"
      content="These are the examples to the JavaScript Techie Boot Camp course.">

   <meta name="keywords"
      content="JavaScript, course, training, overview, script, scripting, web, language, 
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

<br> <br>

<dl>
<?php 
   $fileNames = array( 
	   "helloWorldAlert.php" => "Hello World via Alert",
	   "countDownViaForLoop.php" => "Countdown via for loop",
	   "onClickButton.php" => "onclick Event Handler",
	   "userDefinedFunction.php" => "User Defined Function",
	   "globalAndStaticVariables.php" => "Global and static variables",
	   "formValidation.php" => "Client Side Form Validation",
	   "requiredFields.php" => "Required field validator",
	   "locationReplaceOnChange.php" => "Jump to URL upon selecting dropdown list",
	   "cookiesCheckCreateReadDelete.php" => "Check, Create, Read and Delete Cookies",
	   "cookiesSetGetDelete.php" => "Set, Get and Delete a Cookie",
   		 );
   
   foreach( $fileNames as $file => $title )
   {
      printf( "<dt> <img src='../../../../common/images/icons/balls/16x16/ff00ff.png'>\n" );
      printf( "   <a href='%s'>%s</a> <br> <br>", $file, $title );
   }
?>
</dl>

<br> <br>
<hr>
<br> <br>

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
