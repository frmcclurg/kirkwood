/**
 * @file       formValidation.js
 * @brief      General purpose form validation functions
 * @author     Fred R. McClurg
 * @date       February 4, 2010
 * @addtogroup jsValidation   JavaScript Form Validation Functions
 * @{
 */


/**
 * @brief   Displays an alert dialog if value is not greater than min
 * @author  Fred R. McClurg
 * @date    February 4, 2010
 *
 * @param   widgetName     Name of the text control
 * @param   minValue       Minimum valid value
 * @param   defaultValue   Fallback value in case entered value is invalid
 */
function ValidateMinValue( widgetName, minValue, defaultValue )
{
   // alert( "function ValidateMinValue()" );

   var widgetValue = widgetName.value;
   var alertStr;

   if ( ! IsUnsignedInteger( widgetValue ) || ( widgetValue < minValue ) )
   {
      alert( "Value entered must be an integer greater than " + ( minValue - 1 ) );

      // reset text to a valid value
      widgetName.value = defaultValue;
   }
}  // function ValidateMinValue()


/**
 * @brief   Determines if the passed value is an (signed) integer
 * @author  Fred R. McClurg
 * @date    February 4, 2010
 * @see     IsUnsignedInteger
 *
 * @param   intValue Value to be validated
 * @retval  status   Return TRUE if value is an integer
 */
function IsInteger( intValue )
{
   // alert( "function IsInteger()" );

   var status = IsValidInteger( intValue, false );

   return( status );

}  // function IsInteger()


/**
 * @brief   Determines if the passed value is an unsigned (positive) integer
 * @author  Fred R. McClurg
 * @date    February 4, 2010
 * @see     IsInteger
 *
 * @param   intValue Value to be validated
 * @retval  status   Return TRUE if value is an integer
 */
function IsUnsignedInteger( intValue )
{
   // alert( "function IsUnsignedInteger()" );

   var status = IsValidInteger( intValue, true );

   return( status );

}  // function IsUnsignedInteger()


/**
 * @brief   Determines if the passed value is an integer
 * @author  Fred R. McClurg
 * @date    February 4, 2010
 * @see     IsInteger
 * @see     IsUnsignedInteger
 *
 * @param   intValue    Value to be validated
 * @param   isUnsigned  If true, valid value is unsigned
 * @retval  status   Return TRUE if value is an integer
 */
function IsValidInteger( intValue, isUnsigned )
{
   // alert( "function IsValidInteger()" );

   var status = false;
   var re;

   if ( isUnsigned )
   {
      // allow only alphanumeric characters
      re = new RegExp( "^[0-9]+$" );
   }
   else
   {
      // allow only alphanumeric characters and negative sign
      re = new RegExp( "^-?[0-9]+$" );
   }

   // use a regular expression to validate string
   if ( (intValue.toString().search( re ) == 0 ) )  // exact match
   {
      status = true;
   }

   return( status )

}  // function IsValidInteger()

/** @} */
