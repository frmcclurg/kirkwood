<?php
   // Ignore "Notice: Undefined" errors
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

<?php
   if ( isset( $_REQUEST['find'] ) )
   {
      printf( "You submitted: \"%s\"",
         $_REQUEST['find'] );
   }
?>
</body>
</html>
