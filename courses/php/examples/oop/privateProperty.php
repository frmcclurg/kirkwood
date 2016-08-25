<?php
   /**
    * Demonstrate visibility of a private property
    */
   class Car
   {
      // declaring class private properties
      private $make;   // Toyota, Volkswagen, Ford, Honda, Chevrolet
      private $model;  // Mustang, Pontiac, Prius, Focus, Beetle
      private $color;
      private $year;

      // set private property values
      function setProperties( $make, $model, $color, $year )
      {
         $this->make = $make;
         $this->model = $model;
         $this->color = $color;
         $this->year = $year;
      }

      // get private property values
      function display()
      {
         printf( "Make: %s<br>", $this->make );
         printf( "Model: %s<br>", $this->model );
         printf( "Color: %s<br>", $this->color );
         printf( "Year: %d<br>", $this->year );
      }
   }

   // instantiating object instance
   $companyCar = new Car;

   // set private value outside of class
   // $this->make = $make;  // fatal error

   // setting properties
   $companyCar->setProperties( "Toyota", "Corolla", "Tan", 1999 );

   // printing properties
   $companyCar->display();
?>
