<?php
/**
 * @brief     Contains PHP objects.
 * @file      phpObjects.php
 * @date      March 31, 2014
 * @ingroup   HTML
 */


/**
 * @brief  Builds the navigation menu object
 * @author Fred R. McClurg
 * @date   March 31, 2014
 */
class navMenu
{
	public $label;  // property
	public $icon;  // property
	public $isParent = false;  // property

	function __construct( $newLabel )
	{
		// $this->label = $newLabel;
		// navMenu::setLabel( $newLabel );
		$this->setLabel( $newLabel );
	}

	function setLabel( $newLabel )
	{
		$this->label = $newLabel;
	}

	function getLabel()
	{
		return( $this->label );
	}

}  // class navMenu


/**
 * @brief  Displays the standard HTML header with title and page header
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   May 26, 2008
 * @see    htmlFooter()
 * @param  $title      Application name or general category
 * @param  $subTitle   Page name or specific title
 * @param  $scriptCode JavaScript code inserted into the header
 */
function htmlHeader( $title, $subTitle, $scriptCode = "" )
{
   $baseUrl = htmlBase();

   $htmlString = "
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
                      'http://www.w3.org/TR/html4/loose.dtd'>

<!-- ------------------------------------------------------------------ -->
<!-- Author:  Fred R. McClurg                                           -->
<!-- Good Person Test:  http://www.livingwaters.com/good/               -->
<!-- ------------------------------------------------------------------ -->

<html>
   <head>
      <title>
            $title: $subTitle
      </title>

      <link rel=\"stylesheet\" 
      		type=\"text/css\" 
      		href=\"${baseUrl}common/css/global.css\">

      $scriptCode
   </head>

   <body>
      <a name=\"top\"></a>

      <h3 align=\"center\">
         $title
      </h3>";

   printf( "%s\n", $htmlString );

   if ( $subTitle )
   {
      printf( "      <h1 align=\"center\"> %s </h1>\n", $subTitle );
   }

   $htmlString = "
      <img src=\"${baseUrl}common/images/pixels/ccccff.png\"
           border=\"0\" height=\"4\" width=\"100%\">

      <br> <br>
      <br>";

   printf( "%s\n", $htmlString );

}  // function htmlHeader()


/**
 * @brief  Displays the standard HTML footer with copyright
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   May 26, 2008
 * @see    htmlHeader()
 * @param  $title      Application name or general category
 * @param  $subTitle   Page name or specific title
 */
function htmlFooter( $title, $subTitle = "" )
{
   // initialize constants
   $pocEmail = "frmcclurg@gmail.com";
   $pocName = "Fred R. McClurg";
   $year = date('Y');  // 2008

   $currentPage = sprintf( "http://%s%s", $_SERVER['HTTP_HOST'],
                                          $_SERVER['PHP_SELF'] );

   $expandedTitle = $title;

   if ( strlen( $subTitle ) > 0 )
   {
      $expandedTitle .= sprintf( ": %s", $subTitle );
   }

   // determine the last modified timestamp
   $stat = stat( __FILE__ );
   $lastModified = strftime( "%c", $stat['mtime'] );
   
   $htmlString = "
<br> <br>
   		
<span class=\"copyright\">
   &copy; Copyright $year,&nbsp;
   <a href='mailto:\"$pocName\" <$pocEmail>?subject=${expandedTitle}&body=Dear $pocName:%0D%0A%0D%0ARegarding: $currentPage%0D%0A...'>$pocName</a>,&nbsp;
   All Rights Reserved,&nbsp;
</span>

<span class=\"lastModified\">
    Last Modified: $lastModified
</span>

<div class=\"clear\"></div>";

   printf( "%s\n", $htmlString );

}  // function htmlFooter()


/**
 * @brief  Removes HTML tags from a string and replaces with spaces
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   March 14, 2009
 * @param  $htmlStr      Application name or general category
 * @return String with no HTML tags
 */
function stripHtml( $htmlStr )
{
   $pattern = '/<[^>]*>/';
   $replacement = ' ';

   $stripStr = preg_replace( $pattern, $replacement, $htmlStr );

   return( $stripStr );

}  // function stripHtml()


/**
 * @brief  Builds a "submenu" on the navigation bar which is a Javascript call that opens
 *         two files into one DIVs and opens defines an href
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   April 24, 2010
 * @param  $section      Section number to reference the page of the PowerPoint slide
 * @param  $fileDownload File to download
 * @param  $fileOne      File in middle pane
 * @param  $fileTwo      File in right pane
 * @param  $relativeDir  Relative directory of the PHP file
 * @param  $sourceDiv    The name of the DIV for the source code
 * @param  $resultsDiv   The name of the DIV for the display results
 * @return Prints the href with the JavaScript call
 */
function GenSubMenu( $section, $fileDownload, $fileOne, $fileTwo, $relativeDir, $sourceDiv, $resultsDiv )
{
    $htmlSpacer = str_repeat("&nbsp;", 2);

    $downloadFilePath = sprintf( "%s/%s", $relativeDir, $fileDownload );
    $htmlFilePath = sprintf( "%s/%s", $relativeDir, $fileOne );
    $phpFilePath = sprintf( "%s/%s", $relativeDir, $fileTwo );

    printf( "<a href=\"javascript:noop()\"
                onclick=\"ChangeDownloadLink('%s', 'download');
                          LoadPageIntoTwoDivs('%s', '%s', '%s', '%s');\">%s%s%s</a>",
                    $downloadFilePath,
                    $htmlFilePath, $sourceDiv,
                    $phpFilePath, $resultsDiv,
                    $section, $htmlSpacer, $fileDownload );
}  // function GenSubMenu()


/**
 * @brief  Builds a "submenu" on the navigation bar which is a Javascript call that opens
 *         two files into one DIVs and opens defines an href.
 *         Also defines a target attribute with <a>
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   May 25, 2010
 * @param  $section      Section number to reference the page of the PowerPoint slide
 * @param  $fileDownload File to download
 * @param  $fileOne      File in middle pane
 * @param  $fileTwo      File in right pane
 * @param  $relativeDir  Relative directory of the PHP file
 * @param  $sourceDiv    The name of the DIV for the source code
 * @param  $resultsDiv   The name of the DIV for the display results
 * @return Prints the href with the JavaScript call
 */
function GenSubMenuTarget( $section, $fileDownload, $fileOne, $fileTwo, $relativeDir, $sourceDiv, $resultsDiv )
{
    $htmlSpacer = str_repeat("&nbsp;", 2);

    $downloadFilePath = sprintf( "%s/%s", $relativeDir, $fileDownload );
    $htmlFilePath = sprintf( "%s/%s", $relativeDir, $fileOne );
    $phpFilePath = sprintf( "%s/%s", $relativeDir, $fileTwo );

    printf( "<a href=\"%s\" target=\"_blank\"
                onclick=\"ChangeDownloadLink('%s', 'download');
                          LoadPageIntoTwoDivs('%s', '%s', '%s', '%s');\">%s%s%s</a>",
                    $phpFilePath,
                    $downloadFilePath,
                    $htmlFilePath, $sourceDiv,
                    $phpFilePath, $resultsDiv,
                    $section, $htmlSpacer, $fileDownload );
}  // function GenSubMenuTarget()


/**
 * @brief  Builds a "submenu" on the navigation bar which is a Javascript call that opens
 *         two files into one DIVs and opens defines an href
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   April 24, 2010
 * @param  $section      Section number to reference the page of the PowerPoint slide
 * @param  $fileOne      One file to load
 * @param  $fileTwo      Second file to load
 * @param  $relativeDir  Relative directory of the PHP file
 * @param  $sourceDiv    The name of the DIV for the source code
 * @param  $resultsDiv   The name of the DIV for the display results
 * @return Prints the href with the JavaScript call
 */
function GenSubMenuOne( $section, $fileOne, $relativeDir, $sourceDiv, $resultsDiv )
{
    $numbers = explode( ".", $section );
    if ( $numbers[1] < 10 )
    {
        $htmlSpacer = str_repeat("&nbsp;", 4);
    }
    else
    {
        $htmlSpacer = str_repeat("&nbsp;", 2);
    }

    $phpFilePath = sprintf( "%s/%s", $relativeDir, $fileOne );
    $htmlFilePath = sprintf( "%s.html", $phpFilePath );

    printf( "<a href=\"javascript:noop()\"
                onclick=\"ChangeDownloadLink('%s', 'download');
                          LoadPageIntoTwoDivs('%s', '%s', '%s', '%s');\">%s%s%s</a>",
                    $phpFilePath,
                    $htmlFilePath, $sourceDiv,
                    $phpFilePath, $resultsDiv,
                    $section, $htmlSpacer, $fileOne );
}  // function GenSubMenuOne()


/**
 * @brief  Builds a "submenu" on the navigation bar which is a Javascript call that opens
 *         two files into two DIVs and defines an href
 * @author Fred R. McClurg, frmcclurg@gmail.com
 * @date   April 24, 2010
 * @param  $section      Section number to reference the page of the PowerPoint slide
 * @param  $phpFile      PHP file to load
 * @param  $relativeDir  Relative directory of the PHP file
 * @param  $sourceDiv    The name of the DIV for the source code
 * @param  $resultsDiv   The name of the DIV for the display results
 * @return Prints the href with the JavaScript call
 */
function GenSubMenuTwo( $section, $phpFile, $relativeDir, $sourceDiv, $resultsDiv )
{
    // $numbers = explode( ".", $section );
    // if ( $numbers[1] < 10 )
    // {
        // $htmlSpacer = str_repeat("&nbsp;", 4);
    // }
    // else
    // {
        $htmlSpacer = str_repeat("&nbsp;", 2);
    // }

    $phpFilePath = sprintf( "%s/%s", $relativeDir, $phpFile );
    $htmlFilePath = sprintf( "%s.html", $phpFilePath );

    printf( "<a href=\"javascript:noop()\"
                onclick=\"ChangeDownloadLink('%s', 'download');
                          LoadPageIntoTwoDivs('%s', '%s', '%s', '%s');\">%s%s%s</a>",
                    $phpFilePath,
                    $htmlFilePath, $sourceDiv,
                    $phpFilePath, $resultsDiv,
                    $section, $htmlSpacer, $phpFile );
}  // function GenSubMenuTwo()

?>
