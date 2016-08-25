<?php
   // Ignore "Notice: Undefined" errors
   error_reporting( E_ALL ^ E_NOTICE );

   /**
    * @brief Remember previous radio
    *        button selection
    * @param $getValue Current value
    * @param $radioValue Radio value
    */
   function StickyRadio( $getValue,
                         $radioValue )
   {
      if ( $getValue == $radioValue )
      {
         $currentValue = "checked";
      }
      else
      {
         $currentValue = "";
      }

      return( $currentValue );
   }
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>"
      method="GET">

   <!-- Form Controls -->
   <input type="radio"
          name="convert"
          value="f2c"
          <?= StickyRadio( $_GET['convert'],
                           'f2c' ) ?>>
      Fahrenheit To Centigrade  <br>

   <input type="radio"
          name="convert"
          value="c2f"
          <?= StickyRadio( $_GET['convert'], 'c2f' ) ?>>
      Centigrade To Fahrenheit  <br>

   <input type="radio"
          name="convert"
          value="c2k"
          <?= StickyRadio( $_GET['convert'], 'c2k' ) ?>>
      Centigrade To Kelvin  <br>

   <input type="radio"
          name="convert"
          value="k2c"
          <?= StickyRadio( $_GET['convert'], 'k2c' ) ?>>
      Kelvin To Centigrade  <br>

   <input type="radio"
          name="convert"
          value="f2k"
          <?= StickyRadio( $_GET['convert'], 'f2k' ) ?>>
      Fahrenheit To Kelvin  <br>

   <input type="radio"
          name="convert"
          value="k2f"
          <?= StickyRadio( $_GET['convert'], 'k2f' ) ?>>
      Kelvin To Fahrenheit  <br>

   <input type="text"
          name="degrees"
          value="<?= $_GET['degrees'] ?>">

   <input type="submit"
          name="doit"
          value="Convert">
</form>

<?php
   if ( isset( $_GET['doit'] ) )
   {
      printf( "<br><br> <hr>\n" );

      $input = $_GET['degrees'];
      $convert = $_GET['convert'];

      /* conversion formulas */
      if ( $convert == "f2c" )
      {
         /* Fahrenheit To Centigrade */
         $output = 5/9 * ($input - 32);
      }
      elseif ( $convert == "c2f" )
      {
         /* Centigrade To Fahrenheit */
         $output = (9/5 * $input) + 32;
      }
      elseif ( $convert == "c2k" )
      {
         /* Centigrade To Kelvin */
         $output = $input + 273;
      }
      elseif ( $convert == "k2c" )
      {
         /* Kelvin To Centigrade */
         $output = $input - 273;
      }
      elseif ( $convert == "f2k" )
      {
         /* Fahrenheit To Kelvin */
         $output = 5/9 * ($input - 32) + 273;
      }
      elseif ( $convert == "k2f" )
      {
         /* Kelvin To Fahrenheit */
         $output = (($input - 273) * 9/5 ) + 32;
      }

      /* units of input */
      if ( preg_match( '/^f/', $convert ) )
      {
         $inputUnits = "Fahrenheit";
      }
      elseif ( preg_match( '/^c/', $convert ) )
      {
         $inputUnits = "Centigrade";
      }
      elseif ( preg_match( '/^k/', $convert ) )
      {
         $inputUnits = "Kelvin";
      }

      /* units of output */
      if ( preg_match( '/f$/', $convert ) )
      {
         $outputUnits = "Fahrenheit";
      }
      elseif ( preg_match( '/c$/', $convert ) )
      {
         $outputUnits = "Centigrade";
      }
      elseif ( preg_match( '/k$/', $convert ) )
      {
         $outputUnits = "Kelvin";
      }

      /* display calculations */
      printf( "%f&deg; %s = %f&deg; %s",
         $input, $inputUnits,
         $output, $outputUnits );
   }  // end if
?>
