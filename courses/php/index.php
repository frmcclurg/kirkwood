<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">

      <title>
         PHP/MySQL Boot Camp
      </title>

      <link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/reset.css" media="screen">
      <link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/text.css" media="screen">
      <link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/grid.css" media="screen">
      <link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/layout.css" media="screen">
      <link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/nav.css" media="screen">
      <!--[if IE 6]><link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/ie6.css" media="screen"><![endif]-->
      <!--[if IE 7]><link rel="stylesheet" type="text/css" href="../../common/fluid960gs/css/ie.css" media="screen"><![endif]-->

      <script type="text/javascript" src="../../common/fluid960gs/js/mootools-1.2.1-core.js"></script>
      <script type="text/javascript" src="../../common/fluid960gs/js/mootools-1.2-more.js"></script>
      <script type="text/javascript" src="../../common/fluid960gs/js/mootools-fluid16-autoselect.js"></script>
      <script type="text/javascript" src="../../common/js/loadPageIntoDiv.js"></script>
      <script type="text/javascript" src="../../common/js/javascriptFunct.js"></script>
      <script type="text/javascript" src="../../common/js/basename.js"></script>
      
      <!-- +1 button -->
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
   </head>

<?php
   require_once( "../../common/php/htmlFunct.inc.php" );

   $title = "PHP/MySQL Boot Camp";
?>

   <body>
      <div class="container_16">
         <div class="grid_16">
            <h1 id="branding">
               <?= $title ?>
            </h1>
         </div>
         <div class="clear">
            &nbsp;
         </div>
         <div class="grid_16">
            <div class="grid_4">
               <div class="box">
                  &nbsp;
               </div>
            </div>
            <ul class="nav main">
               <li>
                  <a href="#" onclick="ajaxpage('navSlides.html', 'section-menu');"
                  class="active">Slides</a>
               </li>
               <li>
                  <a>Code</a>

                  <ul>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter03/navMenu.php',
                                                                      'section-menu');">Chapter Three</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter04/navMenu.php',
                                                                      'section-menu');">Chapter Four</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter05/navMenu.php',
                                                                      'section-menu');">Chapter Five</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter06/navMenu.php',
                                                                      'section-menu');">Chapter Six</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter09/navMenu.php',
                                                                      'section-menu');">Chapter Nine</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter10/navMenu.php',
                                                                      'section-menu');">Chapter Ten</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter11/navMenu.php',
                                                                      'section-menu');">Chapter Eleven</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/chapter17/navMenu.php',
                                                                      'section-menu');">Chapter Seventeen</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" onclick="ajaxpage('examples/oop/navMenu.php',
                                                                      'section-menu');">OOP</a>
                     </li>
                  </ul>

               </li>

               <li>
                  <a>Projects</a>

                  <ul>
                     <li>
                        <a href="javascript:noop()" 
                           onclick="ajaxpage('projects/recipe01/navMenu.php',
                                             'section-menu');">Part One (Select/Delete)</a>
                     </li>
                     <li>
                        <a href="javascript:noop()" 
                           onclick="ajaxpage('projects/recipe02/navMenu.php',
                                             'section-menu');">Part Two (Insert/Update)</a>
                     </li>
                     <li>
                        <a href="projects/prime" 
                           target="prime">Prime Sieve</a>
                     </li>
                     <li>
                        <a href="../jqueryui/examples/tablesorter" 
                           target="tablesorter">Table Sorter</a>
                     </li>
                     <li>
                        <a href="../jqueryui/examples/datepicker" 
                           target="datepicker">Date Picker</a>
                     </li>
                     <li>
                        <a href="../jqueryui/examples/dialog" 
                           target="dialog">Dialog</a>
                     </li>
                  </ul>
               </li>

               <li>
                  <a>Frame Sets</a>

                  <ul>
                     <li>
                        <a href="examples/chapter10" target="chapter10">Chapter 10</a>
                     </li>
                     <li>
                        <a href="examples/chapter11" target="chapter11">Chapter 11</a>
                     </li>
                     <li>
                        <a href="projects/recipe01" target="recipe01">Recipe One</a>
                     </li>
                     <li>
                        <a href="projects/recipe02" target="recipe02">Recipe Two</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="clear">
            &nbsp;
         </div>
         <div class="grid_4">
            <div class="box menu">
               <h2>
                  <a href="#" id="toggle-section-menu">Navigation</a>
               </h2>
               <div class="block" id="section-menu">
                  <?php include_once("navSlides.html"); ?>
               </div>
            </div>
         </div>

         <div class="grid_6">
            <div class="box">
                <h2 style="text-align: center" id="download">
                   Source Code
               </h2>
                <div class="block" id="source">
                   &nbsp;
                </div>
            </div>
         </div>

         <div class="grid_6">
            <div class="box">
                <h2 style="text-align: center">Preview Results</h2>
                <div class="block" id="results">
                   &nbsp;
                </div>
            </div>
         </div>

         <div class="clear">
            &nbsp;
         </div>

         <div class="grid_16" id="site_info">
            <div class="box">
               <?php htmlFooter( $title ); ?>
            </div>
         </div>

         <div class="clear">
            &nbsp;
         </div>
      </div>

	   <script src="../../common/js/googleAnalytics.js"></script>
   </body>
</html>