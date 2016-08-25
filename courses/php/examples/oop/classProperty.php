<?php
   /**
    * Defining class with public properties
    */
   class Car
   {
      // declaring class properties
      public $make;   // Toyota, Volkswagen, Ford, Honda, Chevrolet
      public $model;  // Mustang, Pontiac, Prius, Focus, Beetle
      public $color;
      public $year;
   }

   // instantiating object instance
   $companyCar = new Car;

   // setting object properties
   $companyCar->make = "Toyota";
   $companyCar->model = "Corolla";
   $companyCar->color = "Tan";
   $companyCar->year = 1999;

   // using object properties
   printf( "Make: %s<br>", $companyCar->make );
   printf( "Model: %s<br>", $companyCar->model );
   printf( "Color: %s<br>", $companyCar->color );
   printf( "Year: %d<br>", $companyCar->year );
?>
