<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Web Programming: Extra Topics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="../../common/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../common/bootstrap3/css/custom.css" rel="stylesheet">
	<script src="../../common/bootstrap3/js/respond.js"></script>
</head>

<body>
   <div class="container">
      <!-- row 1: navigation -->
      <div class="row">
         <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle"
                  data-toggle="collapse" data-target="#collapse">
                  <span class="sr-only">Toggle Navigation</span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>

            <div class="collapse navbar-collapse" id="collapse">
               <ul class="nav navbar-nav">
                  <li>
                     <a href="..">
                     <span class="glyphicon glyphicon-home"></span>
                     &nbsp; Home</a>
                  </li>

						<li class="dropdown">
                     <a href="javascript:void(0);" data-toggle="dropdown">Administration
                     <span class="caret"></span> </a>
                     <ul class="dropdown-menu">
      						<li> <a href="../admin/classAdministration.ppt">Class Administration</a></li>
      						<li> <a href="../admin/itenerary.pptx">Class Itenerary</a></li>
      						<li> <a href="../admin/private/certificateRequirements.doc">Certificate Requirements</a></li>
                     </ul>
                  </li>

                  <li class="dropdown">
                     <a href="../linux" data-toggle="dropdown">Linux
                        <span class="caret"></span> </a>
                     <ul class="dropdown-menu">
                        <li> <a href="../intro/linuxOS.Chapter05.cli.pptx">
                           Command Line Interface</a></li>
                        <li> <a href="../intro/linuxOS.Chapter05.vim.pptx">
                           vi/vim Editor</a></li>
                     </ul>
                  </li>

                  <li> <a href="../html">HTML</a></li>

                  <!-- <li> <a href="javascript">JavaScript</a></li> -->
   					<!-- <li class="dropdown"> -->
                     <!-- <a href="javascript:void(0);" data-toggle="dropdown">jQuery -->
                     <!-- <span class="caret"></span> </a> -->
                     <!-- <ul class="dropdown-menu"> -->
      						<!-- <li> <a href="jquery">jQuery Core</a></li> -->
      						<!-- <li> <a href="jqueryui">jQuery UI</a></li> -->
                     <!-- </ul> -->
                  <!-- </li> -->

						<li> <a href="../php">PHP</a></li>
						<li class="dropdown">
                     <a href="javascript:void(0);" data-toggle="dropdown">Supplimental
                     <span class="caret"></span> </a>
                     <ul class="dropdown-menu">
      						<li> <a href="../intro/putty.pptx">PuTTY</a></li>
      						<li> <a href="../intro/filezilla.pptx">FileZilla</a></li>
      						<li> <a href="../intro/xampp.pptx">XAMPP</a></li>
      						<li> <a href="../intro/firebug.pptx">Firebug</a></li>
      						<li> <a href="../eclipse">Eclipse</a></li>
      						<li> <a href="../intro/gimp.pptx">GIMP</a></li>
      						<li class="active"> <a href="../extras">Extra Topics</a></li>
      						<!-- <li> <a href="google">Google</a></li> -->
      						<!--  <li> <a href="../php/slides/doxygen.ppt">Doxygen</a></li> -->
                     </ul>
                  </li>
					</ul>

               <ul class="nav navbar-nav pull-right">
						<li> <a href="javascript:alert('Fred R. McClurg\nfrmcclurg@gmail.com')">About</a></li>
               </ul>
				</div>
			</nav>
		</div>  <!-- row 1 -->

		<!-- row 3: article/aside -->
      <div class="row">
         <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
            <div class="well">
               <div class="list-group">
                  <a href="javascript:void(0);"
                     class="list-group-item active">
                     Extra Topics</a>

                  <a href="../php/slides/html5.ppt"
                     class="list-group-item">
                     HTML 5</a>

                  <a href="../php/slides/doxygen.ppt"
                     class="list-group-item">
                     Doxygen</a>

                  <a href="../php/slides/eclipse.ppt"
                     class="list-group-item">
                     Eclipse</a>

                  <a href="../php/slides/frameworks.ppt"
                     class="list-group-item">
                     CSS Frameworks</a>

               </div>
            </div>
         </div>
         <div class="col-lg-9 col-md-8 col-sm-7 hidden-xs">
         </div>
      </div> <!-- end row 3 -->

      <!-- row 4 -->
      <footer class="row">
         <p>
            <small> &copy; <?= date("Y"); ?>, &nbsp; All Rights
               Reserved, &nbsp; Fred R. McClurg </small>
         </p>
      </footer>
   </div> <!-- end container -->

   <!-- javascript -->
   <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script src="../../common/bootstrap3/js/bootstrap.min.js"></script>

   <!--  Google Analytics -->
   <script src="../../common/js/googleAnalytics.js"></script>
</body>
</html>
