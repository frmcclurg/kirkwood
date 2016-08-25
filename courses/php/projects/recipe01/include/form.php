<?php
/**
 * @file form.php
 */

/**
 * @brief Puts column contents into a
 *        select/option drop-down list.
 *
 * @param $conn     Database connection
 * @param $table    Name of table
 * @param $column   Name of column
 * @param $selected ID of item selected
 * @param $isBlank  If true, list contains blank
 *                  item whose value is zero
 */
function PrintDropDown( $conn, $table, $column,
                        $selected, $isBlank )
{
   // 3. Build the SQL statement
   $sql = sprintf( "
   SELECT id, %s
      FROM %s
      ORDER BY %s", $column, $table, $column );

   // 4. Execute the SQL statement
   $result = mysqli_query( $conn, $sql );

   if ( ! $result )  // sql failed
   {
      die( "Could not execute SQL
            <pre>'$sql'</pre> <br>" .
            mysqli_error( $conn ) );
   }

   printf( "<select name='%s'>\n",
              $table );

   if ( $isBlank )
   {
      printf( "<option value='0'>
               </option>\n" );
   }

   // 5. Display the results
   while ( $row =
              mysqli_fetch_assoc(
                 $result ) )
   {
      $selectAttr = "";
      $id = $row['id'];
      $value = $row[$column];

      if ( $id == $selected )
      {
         $selectAttr = "selected";
      }

      printf( "<option value='%d' %s>
                  %s
               </option>\n",
                  $id, $selectAttr, $value );
   }

   printf( "</select>\n" );

}  // function PrintDropDown();


/**
 * @brief Makes the state of a checkbox persistant
 *        (or "sticky") between submissions.
 *
 * @param  $isDefault      True if checkbox is checked by default
 * @param  $checkboxKey    Name of checkbox in $_REQUEST
 * @return $checkedStatus  Returns "checked=checked" if checked
 */
function StickyCheckbox( $isDefault, $checkboxKey )
{
   $isChecked = FALSE;

   if ( $_REQUEST )  // form submitted
   {
      if ( array_key_exists( $checkboxKey, $_REQUEST ) )
      {
         $isChecked = TRUE;
      }
   }
   else  // form not submitted
   {
      if ( $isDefault )
      {
         $isChecked = TRUE;
      }
   }

   $checkedStatus = $isChecked ? "checked=checked" : "";

   return( $checkedStatus );

}  // function StickyCheckbox();
