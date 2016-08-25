<?php
/**
 * @file   cssSelector.php
 *
 * @brief  Illustrate jQuery selector and CSS function
 * @author Fred R. McClurg
 * @since  May 28, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );

   $title = "jQuery selector and CSS function";
   $description = "Illustrates jQuery selector and CSS function capabilties";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
   $headCode = <<< ENDCODE
<head>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> -->
   <!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script> -->
   <!-- <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.7.2.min.js"></script> -->
   <!-- <script type="text/javascript" src="../jquery/jquery-1.7.2.min.js"></script> -->

   <script type="text/javascript">
      $(document).ready(function() {
         $('div.quote').html(function(index, value) {
            alert( 'index: ' + index + '\\n' + 
                   'value: ' + value );
         });
         
         $('div.quote').click(function() {
           alert('You clicked a paragraph!');
         });

         $('div.quote').html( $('div.quote').html().replace('--', '&mdash;') );
         
         $('div.quote').css("background-color", "lightcyan");
         
         $('div.quote').css({ "font-weight": "bold",
                      "font-size": "small" }); 
         
         $('div.quote').append( "<br><br> For more quotes, see <a href='www.wallbuilders.com'>WallBuilders</a>" );
         
         $('div.quote').wrap( "<fieldset class='quote'>" );
         
         $('fieldset.quote').prepend( "<legend>Historical Quote</legend>" );
         
         $('fieldset.quote').after( "<br><br>" );
      });
   </script>
</head>
ENDCODE;

   printf( "%s", $headCode );
?>

<body>

<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<h2>
   Purpose
</h2>

<p>
   <?= $description ?>
</p>

<?php
   $bodyCode = <<< ENDCODE
<div class="quote">
   "...it is the duty of nations as well as of men, to own their dependence upon the overruling power of God, 
   to confess their sins and transgressions, in humble sorrow, yet with assured hope that genuine repentance 
   will lead to mercy and pardon; and to recognize the sublime truth, announced in the Holy Scriptures and 
   proven by all history, that those nations only are blessed whose God is the Lord." 
   -- Abraham Lincoln, March 30, 1863
</div>
   
<div class="quote">
   "Of all the dispositions and habits which lead to political prosperity, religion and morality are 
   indispensable supports.  ... Whatever may be conceded to the influence of refined education on minds 
   of peculiar structure, reason and experience both forbid us to expect that national morality can 
   prevail in exclusion of religious principle." -- George Washington's Farewell Address, 1796
</div>
   
<div class="quote">
   "In the beginning of the contest with G. Britain, when we were sensible of danger we had daily prayer in 
   this room for the Divine Protection. -- Our prayers, Sir, were heard, and they were graciously answered. 
   All of us who were engaged in the struggle must have observed frequent instances of a Superintending 
   providence in our favor. ... And have we now forgotten that powerful friend? Or do we imagine that we no 
   longer need His assistance." -- Benjamin Franklin, June 28, 1787
</div>
   
<div class="quote">
	"I have lived, Sir, a long time and the longer I live, the more convincing proofs I see of this truth -- 
	that God governs in the affairs of men. And if a sparrow cannot fall to the ground without his notice, is 
	it probable that an empire can rise without his aid? We have been assured, Sir, in the sacred writings 
	that 'except the Lord build they labor in vain that build it.'" -- Benjamin Franklin, June 28, 1787
</div>
   
<div class="quote">
   "[W]e have no government armed with power capable of contending with human passions unbridled by morality 
   and religion. ... Our constitution was made only for a moral and religious people. It is wholly inadequate 
   to the government of any other." -- John Adams, June 21, 1776
</div>
   
ENDCODE;

   printf( "%s", $bodyCode );

   printf( "<br><br><br><hr>" );
   printf( "<h2>Code Snippet</h2>" );
   PrintCodeSyntaxSnippet( $headCode, "javascript", false, 7 );

   printf( "<br><br>" );
   PrintCodeSyntaxSnippet( $bodyCode, "html", false, 42 );
?>

</body>
</html>
