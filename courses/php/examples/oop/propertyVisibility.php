<?php
   /**
    * Demostrate visibility of properties from base class and sub-class
    */
   class BaseClass
   {
      public $public = "public initialized in BaseClass";
      protected $protected = "protected initialized in BaseClass";
      private $private = "private initialized in BaseClass";

      // base class constructor
      function BaseClass()
      {
         // set properties from base class
         printf( "<p/> Creating class %s via method %s()<br>", __CLASS__, __FUNCTION__ );
         $this->public = "public in BaseClass";
         $this->protected = "protected in BaseClass";
         $this->private = "private in BaseClass";
      }

      // get properties from base class
      function displayProperties()
      {
         $smlIndent = str_repeat( "&nbsp;", 4 );
         $lgIndent = str_repeat( "&nbsp;", 8 );

         printf( "<br>%s Inside method %s()<br>", $smlIndent, __METHOD__ );
         printf( "%s \$this->public = '%s'<br>", $lgIndent, $this->public );
         printf( "%s \$this->protected = '%s'<br>", $lgIndent, $this->protected );
         printf( "%s \$this->private = '%s'<br>", $lgIndent, $this->private );
      }
   }

   // inherit properies and methods from BaseClass
   class SubClass extends BaseClass
   {
      // sub-class constructor
      function SubClass()
      {
         printf( "<p/>Creating class %s via method %s()<br>", __CLASS__, __FUNCTION__ );
         $this->public = "public in SubClass";
         $this->protected = "protected in SubClass";
         $this->private = "private in SubClass";  // can't redeclare BaseClass value
      }
   }

   $base = new BaseClass();
   $base->displayProperties();

   $base->public = "set \$base->public outside class";  // set public property
   // $base->protected = "protected outside class"; // can't access protected property
   // $base->private = "private outside class"; // can't access private property

   $subClass = new SubClass();
   $subClass->displayProperties();

   $subClass->public = "set \$subClass->public outside class";
   // $subClass->protected = "protected outside class"; //  can't access protected property
   // $subClass->private = "private outside class"; //  Undefined property

   $subClass->displayProperties();
?>
