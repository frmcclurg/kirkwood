<?php
   // Change error reporting to display
   // all "Notice: Undefined index ..." errors.
   // error_reporting( E_ALL | E_NOTICE );

   // Change to turn off error reporting
   // so it does not display 'used before
   // initialized' variables
   error_reporting( E_ALL ^ E_NOTICE );
?>
<html>
<head>
   <title>
      PHP Search Form
   </title>
</head>
<body>
   <form
      action="<?= $_SERVER['PHP_SELF'] ?>"
      method="GET">

      Find:
      <input type="text"
         name="find"
         value="<?= $_GET['find'] ?>">

      <input type="submit"
             name="search"
             value="Search Database">
   </form>
</body>
</html>
