<?php
   /* test for AJAX load  */
   if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
       strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
   	$path = "examples/pageElements/";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Slideshow via setInterval()</title>
   <meta charset="ISO-8859-1">
</head>
<body>
   <h1>Slideshow via setInterval()</h1>

<img src="<?= $path ?>images/000.jpg" id="slideShow"
     style="float: left; margin: 0 7px 7px 0;">

<p>Having lost all my shipboard journals in the
disaster of nine days ago, I will begin with the
wreck itself, and the curious events that
followed.</p>

<p>Alas, our schooner Venturer has perished, along
with all hands, save only my son Will and myself.
We had been two years at sea, departing Boston on
a voyage of discovery, through which I hoped to
distract my son from the recent loss of his mother,
and to assuage, somehow, my own grief.</p>

<script>
var theImage = document.getElementById( "slideShow" );

var imageList = [ "000.jpg", "001.jpg", "002.jpg", "003.jpg", "004.jpg",
                  "005.jpg", "006.jpg", "007.jpg", "008.jpg", "009.jpg" ];

var imageIndex = 1;  // global index

function rotateImage() {
   theImage.setAttribute( "src", "<?= $path ?>images/" + imageList[imageIndex] );
   imageIndex++;

   if ( imageIndex >= imageList.length ) {
      imageIndex = 0;  // start over with first
   }
}

var intervalHandle = setInterval( rotateImage, 3000 );  // start timer

theImage.onclick =  function() {  // add click event to image
   clearInterval( intervalHandle );  // remove timer on click
};
</script>
</body>
</html>
