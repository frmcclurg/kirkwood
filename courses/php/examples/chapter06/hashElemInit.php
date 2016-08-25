<?php
   $month['jan'] = 31;
   $month['feb'] = 28;
   $month['mar'] = 31;
   $month['apr'] = 30;
   $month['may'] = 31;
   $month['jun'] = 30;
   $month['jul'] = 31;
   $month['aug'] = 31;
   $month['sep'] = 30;
   $month['oct'] = 31;
   $month['nov'] = 30;
   $month['dec'] = 31;

   foreach ( $month as $name => $days )
   {
      printf( "%s has %d days<br>",
                 $name, $days );
   }
?>
