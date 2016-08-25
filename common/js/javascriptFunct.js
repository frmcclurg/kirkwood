/**
 * Purpose: Provides a no operation function
 * Author:  Fred R. McClurg
 * Date: April 24, 2010
 */
function noop()
{
   // alert( "Inside noop()" );

   // this script does absolutely nothing
}  // function noop()


/**
 * Purpose: Loads the div with a href link to file to download
 * Author:  Fred R. McClurg
 * Date:    May 8, 2010
 * Param: file Name of the file to download
 * Param: div Name of the div tag
 */
function ChangeDownloadLink(file, div)
{
   // alert( "Inside ChangeDownloadLink()" );

   baseFile = basename(file);

   contents = "<a href=\"../../common/php/download.php?f=" +
               file + "\">" + baseFile + "</a>";

   document.getElementById(div).innerHTML = contents;

}  // function ChangeDownloadLink()