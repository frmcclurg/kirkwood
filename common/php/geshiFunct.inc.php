<?php
/**
 * @brief     Contains GESHI code syntax coloring functions
 * @file      geshiFunct.inc.php
 * @ingroup   GESHI
 * @since     May 19, 2012
 * @author    Fred McClurg
 */

/* Turn on error reporting to aid in debugging */
error_reporting(E_ALL);

// library of code syntax coloring
// require_once( '../../common/geshi/geshi.php' );


/**
 * @brief  Displays code syntax in a nice format for a snippet 
 * @param  $geshi      Code object to return to caller
 * @param  $title      Title displayed in the header
 * @param  $highlight  Array containing of line numbers to highlight
 * @date   May 20, 2012
 */
function SetGeshiDefaults( &$geshi, 
		                     $title = false, 
		                     $highlight = array() )
{
	$flag = GESHI_FANCY_LINE_NUMBERS;
	$geshi->enable_line_numbers($flag, 2);
	$geshi->set_line_style('background: #fcfcfc;', 'background: #f0f0f0;');
	// $geshi->set_line_style('background: #fcfcfc;', 'background: #f0f0f0;');
	
	$geshi->set_header_content($title);
	// $geshi->set_header_content_style('text-align: center; font-weight: bold; background: #D8BFD8; padding: 5px;');
	$geshi->set_header_content_style('text-align: center; font-weight: bold; background: #C1DBF2; padding: 5px;');
	
	$geshi->highlight_lines_extra($highlight);
	$geshi->set_tab_width(3);
	$geshi->set_header_type(GESHI_HEADER_DIV);
	
}  // function SetGeshiDefaults()


/**
 * @brief  Displays code syntax in a nice format for a snippet 
 * @param  $code       Code to display
 * @param  $codeLang   Computer language of code
 * @param  $title      Title displayed in the header
 * @param  $highlight  Array containing of line numbers to highlight
 * @date   May 20, 2012
 */
function PrintCodeSyntaxSnippet( $code,
	                              $codeLang = "html4strict", 
		                           $title = false, 
		                           $highlight = array() )
{
	$language = strtolower( $codeLang );
	
	if ( $language == "html" )
	{
		$language = "html4strict";
	}
	
	// Create a GeSHi object//
	$geshi = new GeSHi($code, $language);
	
	if ( ! $title )
	{
		if ( preg_match( "/html/i", $language ) )
		{
			$title = "HTML Code";
		}
		elseif ( preg_match( "/php/i", $language ) )
		{
			$title = "PHP Code";
		}
		elseif ( preg_match( "/javascript/i", $language ) )
		{
			$title = "JavaScript Code";
		}
	}
	
	SetGeshiDefaults( $geshi, $title, $highlight );
		               
   printf( "<fieldset>" );
	printf( "%s", $geshi->parse_code() );
   printf( "</fieldset>" );
	
}  // function PrintCodeSyntaxSnippet()


/**
 * @brief  Display code syntax in a nice format for a file
 * @param  $file       File containing code to display
 * @param  $codeLang   Computer language of code
 * @param  $title      Title displayed in the header
 * @param  $highlight  Array containing of line numbers to highlight
 * @date   May 21, 2012
 */
function PrintCodeSyntaxFile( $file, 
		                        $codeLang = "html4strict", 
		                        $title = false, 
		                        $highlight = array() )
{
	$language = strtolower( $codeLang );
	
	if ( $language == "html" )
	{
		$language = "html4strict";
	}
	
	// Create a GeSHi object//
	$geshi = new GeSHi();
	$geshi->load_from_file( $file, $language );
	
	SetGeshiDefaults( $geshi, $title, $highlight );
		               
   printf( "<fieldset>" );
	printf( "%s", $geshi->parse_code() );
   printf( "</fieldset>" );
	
}  // function PrintCodeSyntaxFile()
