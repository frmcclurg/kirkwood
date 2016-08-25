<?php
   /**
    * @file       htmlFunctions.php
    * @brief      Collection of general purpose functions related to building HTML code
    * @author     Fred R. McClurg
    * @date       February 6, 2010
    * @addtogroup phpHtml     PHP HTML Functions
    * @{
    */

   /**
    * @brief   Prints the standard HTML header at top of each page
    * @author  Fred R. McClurg
    * @date    February 6, 2010
    * @see     PrintHtmlFooter
    *
    * @param   $title     Used in the HTML page title and the <code> &lt;H1&gt; </code> title
    * @param   $jsFiles   Array containing JavaScript files
    */
   function PrintHtmlHeader( $title, $jsFiles )
   {
      WhereAmI( __FUNCTION__, __FILE__, __LINE__ );

      $includeJs = "";

      foreach ( $jsFiles as $file )
      {
         $includeJs .= sprintf( "<script type=\"text/JavaScript\" src=\"%s\"> </script>\n", $file );
      }

      printf( "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
   <head>
      <title>
         %s
      </title>

      <style type=\"text/css\">
         @import url( \"css/styles.css\" );
      </style>

      <!--[if IE]>
         <style type=\"text/css\">
            @import url( \"css/stylesIE.css\" );
         </style>
      <![endif]-->

      <!-- Include JavaScript Files -->
      %s
   </head>
   <body>  <!-- </body> handled by PrintHtmlFooter() -->
      <h1 class=\"title\"> %s </h1>\n", $title, $includeJs, $title );

    }   //  function PrintHtmlHeader()


   /**
    * @brief   Prints the standard HTML footer at bottom of each page
    * @author  Fred R. McClurg
    * @date    February 6, 2010
    * @see     PrintHtmlHeader
    */
   function PrintHtmlFooter()
   {
      WhereAmI( __FUNCTION__, __FILE__, __LINE__ );

      $year = strftime( "%Y" );
      $copyright = sprintf( "Copyright &copy; %d", $year );
      $name = "Fred R. McClurg";
      $rights = "All Rights Reserved.";
      $spacer = str_repeat( " &nbsp; ", 2 );  // use non-breaking space as a spacer

      $notice = join( $spacer, array( $copyright, $name, $rights ) );

      printf( "
      <p class=\"copyright\"> %s </p>
   </body>
</html>\n", $notice );

    }   //  function PrintHtmlFooter()


   /**
    * @brief   Sets the value of the widget to the previous submission value
    * @author  Fred R. McClurg
    * @date    February 6, 2010
    *
    * @param   $requestKey    Value user entered from previous submission.  Example:
    *                            @code <?= $_REQUEST['valueText'] ?> @endcode
    * @param   $defaultValue  Fallback value if previous submission value is undefined.
    * @retval  $returnedValue Returns previously submitted value or the default.
    */
   function SetStickeyValue( $requestKey, $defaultValue )
   {
      if ( array_key_exists( $requestKey, $_REQUEST ) )
      {
         $returnedValue = $_REQUEST[$requestKey];
      }
      else
      {
         $returnedValue = $defaultValue;
      }

      return( $returnedValue );

    }   //  function SetStickeyValue()


   /**
    * @brief   Used for printing debug statements.
    *
    * @details Prints the passed string if the key <code> $_REQUEST['debug'] </code> or
    *             <code> $_REQUEST['DEBUG'] </code> is set.
    *          Can be turned on by adding a hidden input control into a form.  For example:
    *             @code <input type="hidden" name="debug"> @endcode
    *
    * @author  Fred R. McClurg
    * @date    February 6, 2010
    *
    * @param   $str     String to be printed
    */
   function PrintDebug( $str )
   {
      if ( isset( $_REQUEST['debug'] ) ||
           isset( $_REQUEST['DEBUG'] ) )
      {
         printf( "%s", $str );
      }
  }   //  function PrintDebug()


   /**
    * @brief   Used for generating a simple code traceback.
    *
    * @details Example call usage:
    *             @code WhereAmI( __FUNCTION__, __FILE__, __LINE__ ); @endcode
    *
    * @author  Fred R. McClurg
    * @date    February 6, 2010
    *
    * @param   $function   Function name of calling function (used with "__FUNCTION__")
    * @param   $fileName   Filename containing function (used with "__FILE__")
    * @param   $line       Line number of function call (used with "__LINE__")
    */
   function WhereAmI( $function, $fileName, $line )
   {
      $debugStr = sprintf( "<nobr>Function: %s &nbsp; File: %s &nbsp; Line: %d</nobr><br>\n",
                           $function, basename( $fileName ), $line );

      PrintDebug( $debugStr );

   }   //  function PrintDebug()

/** @} */
?>
