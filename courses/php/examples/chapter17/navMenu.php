<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
?>

<ul class="section menu">
   <li>
      <a class="menuitem">Chapter Sixteen</a>

      <ul class="submenu">
         <li>
            <?php GenSubMenuTwo("17a.3", "compareStr.php", "examples/chapter17",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("17b.15", "preg_match.php", "examples/chapter17",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("17b.16", "preg_match_all.php", "examples/chapter17",
                                    "source", "results"); ?>
         </li>
      </ul>
   </li>
</ul>
