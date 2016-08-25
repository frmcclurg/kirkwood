<?php
   /**
    * Using inheritance by extending a class
    */
   class Car
   {
      // declaring class properties
      protected $make;   // Toyota, Volkswagen, Ford, Honda, Chevrolet
      protected $model;  // Mustang, Pontiac, Prius, Focus, Beetle
      protected $color;
      protected $year;

      // class constructor
      function Car( $make, $model, $color, $year )
      {
         printf( "<br> Inside method %s()<br>", __METHOD__ );
         $this->make = $make;
         $this->model = $model;
         $this->color = $color;
         $this->year = $year;
      }

      // define a class method
      function display()
      {
         $indent = str_repeat( "&nbsp;", 6 );

         printf( "<br> Inside method %s()<br>", __METHOD__ );
         printf( "%s Make: %s<br>", $indent, $this->make );
         printf( "%s Model: %s<br>", $indent, $this->model );
         printf( "%s Color: %s<br>", $indent, $this->color );
         printf( "%s Year: %d<br>", $indent, $this->year );
      }
   }

   // sub-class Truck inherits properties from base class Car
   // sub-class Truck overrides base class method display()
   class Truck extends Car
   {
      private $payload;

      function Truck( $make, $model, $color, $year, $payload )
      {
         printf( "<br> Inside method %s()<br>", __METHOD__ );
         $this->Car( $make, $model, $color, $year );
         $this->payload = $payload;
      }

      // Define a class method
      function display()
      {
         $indent = str_repeat( "&nbsp;", 6 );

         printf( "<br> Inside method %s()<br>", __METHOD__ );
         printf( "%s Make: %s<br>", $indent, $this->make );
         printf( "%s Model: %s<br>", $indent, $this->model );
         printf( "%s Color: %s<br>", $indent, $this->color );
         printf( "%s Year: %d<br>", $indent, $this->year );
         printf( "%s Payload: %d<br>", $indent, $this->payload );
      }
   }

   // Initial Car Object Properties
   $theCar = new Car( "Toyota", "Corolla", "Silver", 2001 );

   // Printing Car Properties
   $theCar->display();

   // Initial Truck Object Properties
   $theTruck = new Truck( "Ford", "F-150", "White", 2015, 1654 );

   // Printing Truck Properties
   $theTruck->display();
?>
