<?php
   $imageDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter06/" : "";
?>

<img src="<?= $imageDir ?>images/circleSquareTriangle.png" width="600" height="600" border="0" usemap="#map">

<map name="map">
   <area shape="rect" 
         coords="150,200,450,400" 
         alt="Rectangle" 
         title="Rectangle" 
         onmouseover="window.status = 'Rectangle: onMouseover';" 
         href="javascript:alert('Rectangle');">

   <area shape="poly" 
         coords="300,100,500,500,100,500" 
         alt="Polygon" 
         title="Polygon" 
         onmouseover="window.status = 'Polygon: onMouseover';" 
         href="javascript:alert('Polygon');">

   <area shape="circle" 
         coords="300,300,200" 
         alt="Circle" 
         title="Circle" 
         onmouseover="window.status = 'Circle: onMouseover';" 
         href="javascript:alert('Circle')">

   <area shape="default" 
         alt="Default" 
         title="Default" 
         onmouseover="window.status = 'Default: onMouseover';" 
         onmouseout="window.status = 'Default: onMouseout';" 
         href="javascript:alert('Default');">
</map>