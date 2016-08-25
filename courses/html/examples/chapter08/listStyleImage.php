<?php
   $imgDir = isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ? "examples/chapter08/" : "";
?>

<style>
   ul.check li {
      list-style-image: url(<?= $imgDir ?>images/check16x16.png);
      list-style-type: square;
   }
</style>

<ul class="check">
   <li> One </li>
   <li> Two </li>
   <li> Three </li>
   <li> Four </li>
</ul>