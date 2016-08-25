<?php
   // Ignore "Notice: Undefined" errors
   error_reporting( E_ALL ^ E_NOTICE );
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>"
      method="GET">

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

      /* Fahrenheit To Centigrade */
      $output = 5/9 * ($input - 32);

      $inputUnits = "Fahrenheit";
      $outputUnits = "Centigrade";

      printf( "%f&deg; %s = %f&deg; %s",
         $input, $inputUnits,
         $output, $outputUnits );
   }
?>
