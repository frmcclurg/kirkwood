<?php
   require_once( "../../../../common/php/htmlFunct.inc.php" );
?>

<ul class="section menu">
   <li>
      <a class="menuitem">Object Oriented Programming</a>

      <ul class="submenu">
         <li>
            <?php GenSubMenuTwo("9", "classProperty.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("10", "classMethod.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("11", "privateProperty.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("12", "constructor.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("13", "constructorAlt.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("14-16", "extends.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("18-20", "propertyVisibility.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("21-22", "methodVisibility.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("23-24", "methodVisibilityExtends.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
         <li>
            <?php GenSubMenuTwo("0", "classVisibility.php", "examples/oop",
                                    "source", "results"); ?>
         </li>
      </ul>
   </li>
</ul>
