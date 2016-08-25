<?php
   class MyClass 
   {
      public $public = 'Public property';
      protected $protected = 'Protected property';
      private $private = 'Private property';

      function displayProperties() 
      {
      	$indent = str_repeat( "&nbsp;", 4 );

         printf( "Inside method %s()<br>", __METHOD__ );
         printf( "%s %s<br>", $indent, $this->public );
         printf( "%s %s<br>", $indent, $this->protected );
         printf( "%s %s<br>", $indent, $this->private );
      }
   }

   $obj = new MyClass();

   // Shows Public, Protected & Private properties
   $obj->displayProperties();

   printf( "<br>Outside class: \$obj->public = %s<br>", 
   		  $obj->public ); // Works
   // echo $obj->protected; // Fatal Error
   // echo $obj->private; // Fatal Error
?>