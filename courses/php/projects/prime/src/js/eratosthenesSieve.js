/**
 * @file       eratosthenesSieve.js
 * @brief      Functions related to solving the Sieve of Eratosthenes
 * @author     Fred R. McClurg
 * @date       February 5, 2010
 * @addtogroup jsHtml   JavaScript Prime Number Functions
 * @{
 */

/**
 * @brief   Creates an array containing prime values
 *
 * @details primeArray     Array of values in the following format:
 *                         If primeArray[2] is false, then the number 2 is prime.
 *                         If primeArray[4] is 2, then the number 4 was first eliminated as a multiple of 2
 *
 * @author  Fred R. McClurg
 * @date    February 5, 2010
 * @bug     If user presses the "Solve" button twice, the previous X's are not cleared.
 *
 * @param   valueMax Max value of numbers in the range.
 */
function CreatePrimeArray( valueMax )
{
   // alert( "function CreatePrimeArray(" + valueMax + ")" );

   // initialize array to avoid "Undefined offset" warnings
   var primeCount = 0;
   var primeNotCount = 0;
   var multipleMax;
   var primeArray = new Array();
   var eliminated = new Array();

   // initialize array to a single value
   for ( i = 0; i < valueMax + 1; i++ )
   {
      // assume all values in range are not prime
      primeArray[i] = false;
      eliminated[i] = 0;
   }

   // eliminate those elements that by definition are not prime
   primeArray[0] = true;
   primeArray[1] = true;

   // need to consider only half of the multiples
   multipleMax = Math.floor( Math.sqrt( valueMax ) );

   // document.write( "<dl>\n" );

   for ( multiple = 2; multiple < multipleMax + 1; multiple++ )
   {
      // document.write( "<dt> Considering multiples of " + multiple + ":\n" );

      if ( ! primeArray[multiple] )  // assume index is prime
      {
         // UpdateCell( multiple, "O", multiple );

         // document.write( "<dd> Eliminating: " );

         firstIndex = multiple * 2;  // start with the next multiple

         // traverse the array by multiples
         for ( j = firstIndex; j < valueMax + 1; j += multiple )
         {
            if ( ! primeArray[j] )  // it has not been eliminated previously
            {
               primeNotCount++;

               setTimeout( "UpdateCell( " + j + ", \"X\", " + multiple + " )", primeNotCount * 500 );

               // eliminate an index that is a multiple
               primeArray[j] = multiple;

               eliminated[multiple]++;

               // document.write( j + "\n" );
            }
         }

         suffix = ( eliminated[multiple] != 1 ) ? "s" : "";  // make plural
         // document.write( "(" + eliminated[multiple] + " value" + suffix + ")\n" );
      }
      else
      {
         // document.write( " (eliminated as multiple of " + primeArray[multiple] + ")\n" );
      }
   }

   // document.write( "<dt> Primes:\n" );

   for ( i = 0; i < valueMax + 1; i++ )
   {
      if ( ! primeArray[i] )  // is prime
      {
         primeCount++;  // record tally

         // document.write( i + "\n" );
      }
   }

   // document.write( "(" + primeCount + " values)\n" );

   // document.write( "</dl>\n" );

   setTimeout( "alert( \"Between the values 2 and " + valueMax + " there are " + primeCount + " prime numbers.\" );",
               ( primeNotCount + 1 ) * 500 );

}   //  function CreatePrimeArray()


/**
 * @brief   Function called from timer that updates the contents of a cell.
 * @author  Fred R. McClurg
 * @date    February 5, 2010
 *
 * @param   value       Cell number to update.
 * @param   symbol      Either an "X" or an "O".
 * @param   multiple    Impacts the color
 */
function UpdateCell( value, symbol, multiple )
{
   // alert( "function UpdateCell(" + value + ", " + symbol + ", " + multiple + ")" );

   var soundFile = "audio/buttonClick.wav";
   var embedStr = " <embed src=\"" + soundFile + "\" hidden=\"true\" autostart=\"true\" loop=\"false\" />\n";
   // var htmlStr = symbol + embedStr;
   var htmlStr = symbol;
   var htmlColor = new Array( "yellow", "red", "black", "blue", "black", "magenta", "black", "black", "black", "cyan", "black", "green", "orange", "pink" );

   divName = "div" + value;
   element = document.getElementById( divName );
   element.innerHTML = htmlStr;
   element.style.color = htmlColor[multiple - 2];
}  // function UpdateCell()

/** @} */
