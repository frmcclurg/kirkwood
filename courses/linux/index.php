<?php 
$title = "Linux Boot Camp";
$subTitle = "Essential&nbsp;survival&nbsp;guide for Linux in the wild";
$description = "A collection of slides to give you a fighting chance of capturing, conquering, and taming Linux";

$aboutContent = sprintf( "<h1>%s</h1> <h2>%s</h2> <hr /> <p>%s</p>", $title, $subTitle, $description );

$copyright = sprintf( "&copy; Copyright %s,&nbsp; All Rights Reserved,&nbsp; Fred R. McClurg", date("Y") );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Linux Boot Camp">
<meta name="author" content="Fred R. McClurg">

<!-- Le styles -->
<link href="../../common/bootstrap/assets/css/bootstrap.css"
   rel="stylesheet">
   
<link href="../../common/bootstrap/assets/css/bootstrap-responsive.css"
   rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" 
   href="../../common/bootstrap/assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144"
   href="../../common/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
   href="../../common/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
   href="../../common/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
   href="../../common/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
   
<!-- Le javascript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../common/bootstrap/assets/js/jquery.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-transition.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-alert.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-modal.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-dropdown.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-tab.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-tooltip.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-popover.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-button.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-collapse.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-carousel.js"></script>
<script src="../../common/bootstrap/assets/js/bootstrap-typeahead.js"></script>
   
<link type="text/css" 
   href="../../common/jquery-ui/css/smoothness/jquery-ui-1.10.2.custom.css" rel="stylesheet" />	
   
<style type="text/css">
   body 
   {
      padding-top: 60px;
      padding-bottom: 40px;
   }
   
   .sidebar-nav 
   {
      padding: 9px 0;
   }
   
   .nav-header
   {
      /* background-color: #28369f; */
      background-color: #00108a;
      color: #ffffff;
   }
</style>

<script type="text/javascript" 
   src="../../common/jquery-ui/js/jquery-1.9.1.js"></script>
<script type="text/javascript" 
   src="../../common/jquery-ui/js/jquery-ui-1.10.2.custom.min.js"></script>
   
<script type="text/javascript">
   // $(document).ready(function() {
   $(function() {
   	$(".nav-list > li a").click(function() {
      	$(".nav-list > li.active").removeClass("active");
      	$(this).parent().addClass("active");
      });
   });

   function jQueryDialog( title, body, isModal )
   {
      var newDiv = $(document.createElement('div'));
      $(newDiv).attr("title", title);
      $(newDiv).html(body);
      $(newDiv).dialog({
         autoOpen: true,
         modal: isModal,
         draggable: true,
         height: 350,
         width: 340,
         buttons: [
         {
            text: "Ok",
            click: function()
            {
               $(this).dialog("close");
            }
         }] 
      });
   }  // function jQueryDialog()
</script>

</head>

<body>
   <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
         <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
               <span class="icon-bar"></span>
               <span class="icon-bar"></span> 
               <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><?= $title ?></a>
            <div class="nav-collapse">
               <ul class="nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="javascript:void(0)"
                         onclick="jQueryDialog('About Dialog', 
                                               '<?= $aboutContent ?>', 
                                               true)">About</a></li>
                  <li><a href="javascript:void(0)" 
                         onclick="jQueryDialog('Contact Dialog', 
                                               '<?= $copyright ?>', 
                                               false)">Contact</a></li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span3">
            <div class="well sidebar-nav">
               <ul class="nav nav-list">
                  <li class="nav-header">Unit 1: An Introduction to Linux</li>
                  <li><a href="lesson01/linuxOS.Chapter01.pptx">Chapter 1: Welcome to Linux</a></li>
                  <li><a href="lesson01/linuxOS.Chapter02.pptx">Chapter 2: Installation Overview</a></li>
                  
                  <li class="nav-header">Unit 2: The Linux Desktop</li>
                  <li><a href="lesson02/linuxOS.Chapter04.pptx">Chapter 4: Introduction to Fedora and Red Hat Enterprise Linux</a></li>
                  <li><a href="lesson02/linuxOS.Chapter08.pptx">Chapter 8: Linux GUIs: X and Gnome</a></li>
                  
                  <li class="nav-header">Unit 3: Command Line Interface (CLI)</li>
                  <li><a href="lesson03/linuxOS.Chapter05.cli.pptx">Chapter 5: The Linux Utilities&nbsp;*</a></li>
                  
                  <li class="nav-header">Unit 4: More Command Line Interface (CLI)</li>
                  <li><a href="lesson04/linuxOS.Chapter05.vim.pptx">Chapter 5: The vim Editor&nbsp;*</a></li>
                  <li><a href="lesson04/linuxOS.Chapter06.pptx">Chapter 6: The Linux Filesystem</a></li>
                  <li><a href="lesson04/linuxOS.Chapter07.pptx">Chapter 7: The Shell</a></li>
                  
                  <li class="nav-header">Unit 5: Shell Scripting in Linux</li>
                  <li><a href="lesson05/linuxOS.Chapter09.pptx">Chapter 9: The Bourne Again Shell (bash)</a></li>
                  <li><a href="lesson05/linuxOS.Chapter27.pptx">Chapter 27: Programming the Bourne Again Shell</a></li>
                  
                  <li class="nav-header">Unit 6: Perl Scripting in Linux</li>
                  <li><a href="lesson06/linuxOS.Chapter14.pptx">Chapter 14: Printing with CUPS</a></li>
                  <li><a href="lesson06/linuxOS.Chapter17.pptx">Chapter 17: Configuring a LAN</a></li>
                  <li><a href="lesson06/linuxOS.Chapter28.pptx">Chapter 28: The Perl Scripting Language</a></li>
                  <li><a href="lesson06/perlExample.splitPasswd.docx">Perl Example: Parse Password File</a></li>
                  
                  <li class="nav-header">Unit 7: Linux Network Services</li>
                  <li><a href="lesson07/linuxOS.chapter10.phpAndMysql.pptx">Chapter 10: Networking and the Internet</a></li>
                  <li><a href="lesson07/linuxOS.Chapter18.pptx">Chapter 18: OpenSSH: Secure Network Communication</a></li>
                  <li><a href="lesson07/linuxOS.Chapter19.pptx">Chapter 19: FTP: Transferring Files Across a Network</a></li>
                  
                  <li class="nav-header">Unit 8: Installing Software in Linux</li>
                  <li><a href="lesson08/linuxOS.Chapter13.cli.pptx">Chapter 13: Downloading and Installing Software</a></li>
                  <li><a href="lesson08/Makefile.docx">Make Example: Makefile</a></li>
                  
                  <li class="nav-header">Unit 9: Basic Linux Administration</li>
                  <li><a href="lesson09/linuxOS.chapter11.forms.pptx">Chapter 11: System Administration: Core Concepts</a></li>
                  <li><a href="lesson09/linuxOS.Chapter16.pptx">Chapter 16: Administration Tasks</a></li>
                  
                  <li class="nav-header">Unit 10: Basic Apache Configuration and Management</li>
                  <li><a href="lesson09/linuxOS.Chapter26.pptx">Chapter 26: Apache (httpd): Setting Up a Web Server</a></li>
                  
               </ul>
            </div>
            <!--/.well -->
         </div>
         <!--/span-->
         <div class="span9">
            <div class="hero-unit">
               <?= $aboutContent ?>
            </div>
            <!--/row-->
         </div>
         <!--/span-->
      </div>
      <!--/row-->

      <hr>

      <footer>
         <p style="text-align: center;">
            <?= $copyright ?>
         </p>
      </footer>

   </div>
   <!--/.fluid-container-->

</body>
</html>
