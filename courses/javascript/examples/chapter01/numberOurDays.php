<?php
/**
 * @file   numberOurDays.php
 *
 * @brief  Using JavaScript with a form.
 * @author Fred R. McClurg
 * @since  June 14, 2012
 */

   include_once( '../../../../common/php/geshiFunct.inc.php' );
   include_once( '../../../../common/geshi/geshi.php' );
   
   $title = "Teach Us to Number Our Days";
?>
<!DOCTYPE html>
<html>
<head>
   <title><?= $title ?></title>
</head>

<?php
	$headCode = <<< ENDCODE
<head>
   <script type="text/javascript">
      // @brief      Determine the number of days remaining in a person's life
      // @param gender  Gender selected ("M" or "F")
      // @param month   Birth month
      // @param day     Birth day
      // @param year    Birth year
      function CalculateDays( gender, month, day, year )
      {
         // Reference: http://www.census.gov/compendia/statab/2012/tables/12s0105.pdf
         // All races (white & black)
         // Year: 2010 (projection)
         // Male: 75.7
         // Female: 80.8
         
         var dayOfBirth = new Date( year, month - 1, day );
         var today = new Date();
         var dayOfDeath;
         var dayInMilliseconds = 1000 * 60 * 60 * 24;
         
         if ( gender == "M" )
         {
            lifeExpectancy = 75.7;
         }
         else if ( gender == "F" )
         {
            lifeExpectancy = 80.8;
         }
         else  // did not select gender
         {
            lifeExpectancy = 78.3;
         }
         
         if ( year == "" ||
              month == "" ||
              day == "" )
         {
            alert( "You must select your birthdate." );
            return( false );
         }
         
         timeOfDeath = dayOfBirth.getTime() + ( lifeExpectancy * dayInMilliseconds * 365 );
         dayOfDeath = new Date( timeOfDeath );
         // alert( "Day of Death: " + dayOfDeath );
         
         daysRemaining = Math.round( ( dayOfDeath.getTime() - today.getTime() ) / dayInMilliseconds );
         // alert( "Days remaining: " + daysRemaining );
         
         document.daysForm.elements['daysRemaining'].value = daysRemaining;
         
      }  // CalculateDays()
   </script>
</head>
ENDCODE;
	
	printf( "%s", $headCode );
?>
	
<body>
<h1 style="text-align: center;">
   <?= $title ?>
</h1>

<blockquote>
	"So teach us to number our days that we may get 
	 a heart of wisdom."
	 &nbsp; &mdash; Psalm 90:12
</blockquote>

The Bible instructs us to number our days.  
Complete the following form to get an exact 
calculation.

<br> <br>

<!-- php -->
	<!-- $bodyCode = <<< ENDCODE -->
<form name="daysForm">
   <select name="gender">
      <option value="">Select Gender</option>
      <option value="F">Female</option>
      <option value="M">Male</option>
   </select>
   
   <br> <br>
   
   <fieldset>
      <legend>Date of Birth</legend>
   <select name="month">
      <option value="">Select Month</option>
<?php
   $months = array( "1" => "January",
   		           "2" => "February",
   		           "3" => "March",
   		           "4" => "April",
   		           "5" => "May",
   		           "6" => "June",
   		           "7" => "July",
   		           "8" => "August",
   		           "9" => "September",
   		           "10" => "October",
   		           "11" => "November",
   		           "12" => "December" );
   
   foreach ( $months as $day => $month )
   {
      printf( "<option value='%d'>%s</option>\n", $day, $month );
   }
?>
   </select>
   
   <select name="day">
      <option value="">Select Day</option>
   
<?php
   for ( $i = 1; $i <= 31; $i++ )
   {
      printf( "<option value='%d'>%d</option>\n", $i, $i );
   }
?>
   </select>
   
   <select name="year">
      <option value="">Select Year</option>
   
<?php
   for ( $i = 2012; $i >= 2012 - 100; $i-- )
   {
      printf( "<option value='%d'>%d</option>\n", $i, $i );
   }
?>
   </select>
   </fieldset>
   
   <br> <br>
   
   <div style="text-align: center">
	   <button type="button"
	           onClick="javascript:CalculateDays( daysForm.elements['gender'].value, daysForm.elements['month'].value, daysForm.elements['day'].value, daysForm.elements['year'].value );">
		   Calculate Your Number of Days
		</button>
	</div>
	
   <br> <br> <br>
   
	<hr>
	
   <br> <br>
   
   You have approximately
   
   <input type="text" 
          name="daysRemaining" 
          size="4" 
          maxlength="4"
          readonly="readonly">
   days remaining.

   <br> <br>
   
   How are you going to spend the rest of your days?
   
</form>
<!-- ENDCODE; -->

<?php
/*
	printf( "%s", $bodyCode );
	
	printf( "<br> <br><br><hr>" );
	printf( "<h2>Code Snippet</h2>" );
	PrintCodeSyntaxSnippet( $headCode, "javascript" );

	printf( "<br> <br>" );
	PrintCodeSyntaxSnippet( $bodyCode, "html" );
*/
?>

</body>
</html>