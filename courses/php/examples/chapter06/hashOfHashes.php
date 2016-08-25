<?php
   function PrintArray( $array, $indent )
   {
      foreach( $array as $key => $value )
      {
         $spacer = str_repeat(" &nbsp; ", $indent );

         printf( "%s Key: %s", $spacer, $key );

         if ( is_array( $value ) )
         {
            printf( "<br>" );

            // recursive call
            PrintArray( $value, $indent + 1 );
         }
         else
         {
            printf( "&nbsp; Value: %s <br>", $value );
         }
      }
   }  // PrintArray

   /*
   $popByZip['IA']['Ames']['50010'] = 24991;
   $popByZip['IA']['Ames']['50014'] = 29541;
   $popByZip['IA']['Dubuque']['52001'] = 44033;
   $popByZip['IA']['Dubuque']['52002'] = 11539;
   $popByZip['IA']['Dubuque']['52003'] = 13305;
   $popByZip['IA']['Waterloo']['50701'] = 29890;
   $popByZip['IA']['Waterloo']['50702'] = 19299;
   $popByZip['IA']['Waterloo']['50703'] = 20978;
   $popByZip['IA']['Waterloo']['50707'] = 8155;
   */

   // array can also be defined via multiple statements above
   $popByZip =
      array( 'IA' =>
         array( 'Ames' =>
                   array( 50010 => 24991,
                          50014 => 29541 ),
                'Dubuque' =>
                   array( 52001 => 44033,
                          52002 => 11539,
                          52003 => 13305 ),
                'Waterloo' =>
                   array( 50701 => 29890,
                          50702 => 19299,
                          50703 => 20978,
                          50707 => 8155 ) ) );

   // echo "<pre>";
   // var_export( $popByZip );
   // echo "</pre>";

   PrintArray( $popByZip, 0 );
?>
