<?php
   /**
    * @file       index.php
    * @brief      Perform page redirection
    * @author     Fred R. McClurg
    * @date       August 14, 2013
    */

   header("Location: src/index.php"); /* Redirect Browser */

   /* Make sure that code below does not get executed when we redirect. */
   exit();
?>

