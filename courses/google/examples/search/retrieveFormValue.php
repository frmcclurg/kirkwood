<?php 
   $title = "Retrieve Form Value";
?>
<html>
<head>
   <title><?= $title ?></title>
</head>

<body>
   <h1><?= $title ?></h1>
   
   Enter a value in the text box: <br>
   <form action="<?= $_SERVER['PHP_SELF'] ?>">
      <input type="text" name="search"> <br>
      <input type="submit" name="submit" value="Search the site">
   </form>
  
   <br> <br> <br>
   
<?php 
   if ( isset( $_REQUEST['search'] ) )
   {
   	printf( "The variable is: %s", $_REQUEST['search'] );
   }
?>
</body>
</html>