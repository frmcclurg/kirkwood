<?php
   /**
    * @file index.php
    * @abstract Main page for class slides and examples
    * @author Fred R. McClurg
    * @date March 30, 2014
    */
	require_once( "../../common/php/errors.php" );
	require_once( "../../common/php/bootstrapUtils.php" );
	require_once( "../../common/geshi/geshi.php" );
	require_once( "../../common/php/geshiFunct.inc.php" );

   $menu =
   array
   (
      array
      (
         "label" => "Introduction",
         "icon" => "fa-sitemap",
         "href" => "#",
         "parent" => true,
      ),
      array
      (
         array
         (
            "label" => "Slides",
	         "icon" => "fa-picture-o",
	         "href" => "../php/slides/frameworks.ppt",
	         "parent" => false,
         ),
         array
         (
            "label" => "Examples",
	         "icon" => "fa-code",
	         "href" => "#",
	         "parent" => true,
         ),
         array
         (
            array
            (
               "label" => "Bootstrap CDN",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/bootstrapCdn.html&lang=html&title=Bootstrap CDN",
		         "parent" => false,
            ),
            array
            (
               "label" => "Bootstrap Grid Template",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/gridTemplate.html&lang=html&title=Grid Template",
		         "parent" => false,
            ),
            array
            (
               "label" => "Bootstrap Glyphicons",
		         "icon" => "fa-file-text-o",
		         "href" => "?file=examples/glyphicons.html&lang=html&title=Bootstrap Glyphicons",
		         "parent" => false,
            ),
         )
      ),
   );
  
   // printf( "<pre>%s</pre><br> <br>\n", print_r( $menu, true ) );
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HTML: Definitive Guide</title>

<!-- Core CSS - Include with every page -->
<link href="../../common/startbootstrap/css/bootstrap.min.css"
   rel="stylesheet">
<link
   href="../../common/startbootstrap/font-awesome/css/font-awesome.css"
   rel="stylesheet">

<!-- Page-Level Plugin CSS - Dashboard -->
<link
   href="../../common/startbootstrap/css/plugins/morris/morris-0.4.3.min.css"
   rel="stylesheet">
<link
   href="../../common/startbootstrap/css/plugins/timeline/timeline.css"
   rel="stylesheet">
  
<!-- SB Admin CSS - Include with every page -->
<link href="../../common/startbootstrap/css/sb-admin.css" 
      rel="stylesheet">

<!-- local CSS styling -->
<link href="../../common/css/bootstrapStyles.css" 
      rel="stylesheet">

<!-- CSS Base, Reset, Normalize -->
<!-- <link  -->
   <!-- href="http://yui.yahooapis.com/3.15.0/build/cssbase-context/cssbase-context-min.css" -->
   <!-- href="css/cssbase-context-min.css" -->
   <!-- rel="stylesheet"  -->
   <!-- type="text/css"> -->

<!-- <link  -->
   <!-- href="http://yui.yahooapis.com/3.15.0/build/cssreset-context/cssreset-context-min.css" -->
   <!-- href="css/cssreset-context-min.css" -->
   <!-- rel="stylesheet"  -->
   <!-- type="text/css"> -->

<!-- <link  -->
   <!-- href="http://yui.yahooapis.com/3.15.0/build/cssnormalize-context/cssnormalize-context-min.css" -->
<link
   href="../../common/css/cssnormalize-context.css"
   rel="stylesheet" 
   type="text/css">

<!-- jQuery -->
<script src="../../common/jquery-ui/js/jquery-1.9.1.js"></script>

<script>
/*
	$('ul li a').click(function(e) {
		var $this = $(this);
	   if (!$this.hasClass('recent')) {
	      $this.addClass('recent');
	   }
	   e.preventDefault();
	});
*/

/*
$( document ).ready(function() {
   // alert( "jQuery is ready!" );
   $( "a" ).click(function( event ) {
      alert( "Thanks for visiting!" );
   });
});
*/

/*
$("input#submitButton").click( function() {
   $.ajax({
       url: "<?= $_SERVER['PHP_SELF'] ?>",
       type: 'get',
       dataType: 'json',
       data: $('form#myForm').serialize(),
       success: function(data) {
                  alert( "Inside function ..." );
                }
   });
});
*/

$( document ).ready(function() {
   $( "a.menu" ).click(function( event ) {

      var href = $(this).attr( "href" );
      // console.log( "href: ", href );
      var queryStr = href.split( "?" )[1];

      if ( typeof queryStr !== 'undefined' )  // if query string
      {
	      // console.log( "queryStr: ", queryStr );
	      var keyValuePair = queryStr.split( "&" );
	      // console.log( "keyValuePair: ", keyValuePair );
	      var param = new Array();
	
	      for ( var i = 0; i < keyValuePair.length; i++ )
	      {
	         key = keyValuePair[i].split( "=" )[0];
	         value = keyValuePair[i].split( "=" )[1];
	         param[ key ] = value;
	      }
	     
	      // console.log( "param: ", param );
	     
	      $.ajaxSetup ({
            // Disable caching of AJAX responses
            cache: false
         });

			// execute script to retrieve the formatted code
			$.ajax({
			   // url: "geshiPrintFile.php?file=index.html&lang=html&title=Hello+World",
			   type: "POST",
			   url: "geshiPrintFile.php",
			   // data: { file: "examples/chapter02/helloWorld.html", lang: "html", title: "Hello World" },
			   data: { file: param['file'], lang: param['lang'], title: param['title'] },
			   dataType: "html"
			}).done( function( html ) {
			   $( "#coderize" ).html( html );
			   $( "#codelink" ).html( 'Open page <a href="' + param['file'] + '" target="html" >' + param['title'] + '</a> in new window.'  );
			   $( "#renderize" ).load( param['file'] );
			});

		   event.preventDefault();
      }
   });
});

/*
$.get( "geshiPrintFile.php",
       { file: "index.html", lang: "html", title: "Hello World" } )
*/
         
</script>

</head>

<body>

   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle"
               data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span> <span
                  class="icon-bar"></span> <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Project name</a> -->
         </div>
         <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <li>
                  <a href="..">
                  <span class="glyphicon glyphicon-home"></span>
                  &nbsp; Home</a>
               </li>

               <li class="active"><a href="javascript:void(0);">HTML</a> </li>

               <li><a href="../javascript">JavaScript</a></li>

               <li><a href="../php">PHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="javascript:alert('&copy; Copyright <?= date('Y'); ?>\nFred R. McClurg, frmcclurg@gmail.com\nAll Rights Reserved');">Contact</a> </li>
            </ul>
         </div>
      </div>
   </div>

   <div class="panel panel-default">
	   <div class="panel-body" id="wrapper">
	      <div class="row">
	         <!-- <nav class="navbar-default navbar-static-side" role="navigation"> -->
	         <nav class="navbar-default col-lg-2 col-md-3 col-sm-4" role="navigation">
	
<?php
	buildNavigationMenu( $menu );
?>
	
	         </nav> <!-- /.navbar-static-side -->
	         <div class="col-lg-5 col-md-5 col-sm-4">
	            <div class="panel panel-default">
	               <div class="panel-heading"><h2>HTML Code</h2></div>
	               <div class="panel-body" id="coderize">
	               </div> <!-- panel-body -->
	               <div class="panel-body" id="codelink">
	               </div> <!-- panel-body -->
	            </div> <!-- panel panel-default -->
	         </div>
	         <!-- col -->
	         <div class="col-lg-5 col-md-4 col-sm-4">
	            <div class="panel panel-default">
	               <div class="panel-heading"><h2>HTML Rendered</h2></div>
	               <div class="panel-body">  
	                  <!-- remove all CSS styling here -->
		               <!-- <div class="yui3-cssbase" id="yui3-normalized"> -->
		               <div class="normalized" id="renderize">  <!-- remove all CSS styling here -->
		               </div> <!-- renderized -->
	               </div> <!-- panel-body -->
	            </div> <!-- panel panel-default -->
	         </div> <!-- col -->
	      </div> <!-- row -->
	   </div> <!-- /#wrapper -->
   </div>  <!-- panel panel-default -->

   <div class="footer">
      &copy; Copyright <?= date('Y'); ?>, Fred McClurg, All Rights Reserved
   </div>

   <!-- Core Scripts - Include with every page -->
   <script src="../../common/startbootstrap/js/jquery-1.10.2.js"></script>
   <script src="../../common/startbootstrap/js/bootstrap.min.js"></script>
   <script
      src="../../common/startbootstrap/js/plugins/metisMenu/jquery.metisMenu.js"></script>

   <!-- Page-Level Plugin Scripts - Dashboard -->
   <script
      src="../../common/startbootstrap/js/plugins/morris/raphael-2.1.0.min.js"></script>
   <script src="../../common/startbootstrap/js/plugins/morris/morris.js"></script>

   <!-- SB Admin Scripts - Include with every page -->
   <script src="../../common/startbootstrap/js/sb-admin.js"></script>

   <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
   <script src="../../common/startbootstrap/js/demo/dashboard-demo.js"></script>

   <!--  Google Analytics -->
   <script src="../../common/js/googleAnalytics.js"></script>
</body>

</html>
