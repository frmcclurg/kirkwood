<?php
   /**
    * Defining class with public properties and method
    */
   class Car
   {
      // declaring class properties
      public $make;   // Toyota, Volkswagen, Ford, Honda, Chevrolet
      public $model;  // Mustang, Pontiac, Prius, Focus, Beetle
      public $color;
      public $year;

      // define a class method
      function display()
      {
         printf( "Inside method %s()<br>", __METHOD__ );
         printf( "<dd> Make: %s<br>", $this->make );
         printf( "<dd> Model: %s<br>", $this->model );
         printf( "<dd> Color: %s<br>", $this->color );
         printf( "<dd> Year: %d<br>", $this->year );
      }
   }

   // instantiating object instance
   $companyCar = new Car;

   // setting private properties
   $companyCar->make = "Toyota";
   $companyCar->model = "Corolla";
   $companyCar->color = "Tan";
   $companyCar->year = 1999;

   // printing private properties
   $companyCar->display();
?>
