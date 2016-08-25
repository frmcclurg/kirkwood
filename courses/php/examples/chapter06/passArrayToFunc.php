<?php
   function printList( $list )
   {
      foreach( $list as $item )
      {
         printf( "%s<br>", $item );
      }
   }
   
   $groceries = array( "blueberries", 
                       "strawberries",
                       "bananas" );

   printList( $groceries );
?>
