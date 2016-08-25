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
         value="<?= isset( $_GET['find'] ) ?  $_GET['find'] : '' ?>">

      <input type="submit"
             name="search"
             value="Search Database">
   </form>
</body>
</html>
