<?php
   /**
    * @file       index.php
    * @brief      Main page for the Sieve of Eratosthenes solver
    * @author     Fred R. McClurg
    * @date       February 6, 2010
    *
    * @mainpage   Main Page
    *
    *             This web application,
    *             <a href="../src"
    *                target="application">Prime Number Solver</a>
    *             uses an algorithm called the
    *             <a href="http://www.britannica.com/EBchecked/topic/191062/sieve-of-Eratosthenes"
    *                target="reference">Sieve of Eratosthenes</a>
    *             to determine the numbers in a range that are prime. &nbsp;
    *             This is accomplished by eliminating the multiples in that
    *             range of values.
    *
    * @todo       The "Update" and the "Solve" button should be combined
    *             together.
    */
123456789+123456789+123456789+123456789+123456789+123456789+123456789+123456789+
   require_once( "include/errorReporting.php" );
   require_once( "include/htmlFunctions.php" );
   require_once( "include/primeFunctions.php" );

   $defaultMax = 48;
   $title = "Prime Number Solver";
   $jsFiles = array( "js/formValidation.js", "js/eratosthenesSieve.js" );

   PrintHtmlHeader( $title, $jsFiles );
?>

   <p>
      This web application uses an algorithm called the
      <a href="http://www.britannica.com/EBchecked/topic/191062/sieve-of-Eratosthenes"
         target="reference">Sieve of Eratosthenes</a>
      to determine the numbers in a range that are prime. &nbsp; This is
      accomplished by eliminating the multiples in that range of values.
   </p>

   <p>
      Enter the maximum value and press the "Update" button to change
      the number elements in the grid. &nbsp; Press the "Solve" button
      to calculate the primes.
   </p>

   <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
      <table align="center">
         <tr>
            <td>
               2 ... <input type="text"
                      name="maxText"
                      value="<?= SetStickeyValue( "maxText", $defaultMax ); ?>"
                      size="2"
                      maxlength="2"
                      onChange="ValidateMinValue( this, 3, <?= $defaultMax ?> );">

               <input type="submit"
                      name="update"
                      value="Update Grid">

               <input type="button"
                      name="solve"
                      value="Solve Primes"
                      onClick="CreatePrimeArray(<?= SetStickeyValue( "maxText", $defaultMax ); ?>)">

               <!-- used for debugging -->
               <!-- <input type="hidden" name="debug"> -->
            </td>
         </tr>
      </table>
   </form>

<?php
   if ( isset( $_REQUEST['maxText'] ) )  // submit button pressed
   {
      $maxCount = $_REQUEST['maxText'];
   }
   else
   {
      $maxCount = $defaultMax;  // default value
   }

   PrintSieveTable( $maxCount );
?>

   <p> The <a href="../html" target="doxygen">source code</a> for
       this project has been documented using doxygen.</p>

   <p> A <a href="../archive/prime.zip"
            type="application/zip">zip file</a> or a
         <a href="../archive/prime.tar.gz"
            type="application/x-gtar">compressed tar file</a>
       of the source code is also available.</p>
<?php

   PrintHtmlFooter();
?>

