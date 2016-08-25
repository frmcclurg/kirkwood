<?php
   /**
    * @file index.php
    * @abstract Utility called by main page to print 
    *           GESHI code syntax from filename passed 
    *           via query string.
    * @author Fred R. McClurg
    * @date March 30, 2014
    */
	require_once( "../../common/php/errors.php" );
	require_once( "../../common/geshi/geshi.php" );
	require_once( "../../common/php/geshiFunct.inc.php" );

   if ( isset( $_REQUEST['file'] ) )
   {
		// PrintCodeSyntaxFile( "examples/chapter02/helloWorld.html", 
		//                      "html", 
		//                      "Hello World" );

		PrintCodeSyntaxFile( $_REQUEST['file'], 
				               $_REQUEST['lang'], 
				               $_REQUEST['title'] );
   }
?>
