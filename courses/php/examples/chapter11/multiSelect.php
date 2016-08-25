<form action="<?= $_SERVER['PHP_SELF'] ?>"
      method="GET">

   <select name="media[]"
           multiple="multiple">
      <option value="Hardback">
         Hard Cover
      </option>

      <option value="Paperback">
         Soft Cover
      </option>

      <option value="CD">
         Audio Book
      </option>

      <option value="DVD">
         Video
      </option>
   </select>

   <br><br>

   <input type="submit"
          name="order"
          value="Order">
</form>

<?php
   if ( isset( $_GET['order'] ) )
   {
      printf( "<br><br> <hr>\n" );
      printf( "You selected:<br>\n" );

      foreach ( $_GET as $key => $outie )
      {
         if ( is_array( $_GET[$key] ) )
         {
            $max = count( $_GET[$key] );

            for ( $i = 0; $i < $max; $i++ )
            {
               $innie = $_GET[$key][$i];

               printf( "<dd> \$_GET[%s][%d]: %s<br>\n",
                          $key, $i, $innie );
            }  // end for
         }
         else  // $_GET is not an array
         {
            printf( "<dd> \$_GET[%s]: %s<br>\n",
                       $key, $outie );
         }  // end else
      }  // end foreach
   }  // end if
?>
