<?php
   /**
    * Defining class with constructor
    */
   class Car
   {
      // declaring class properties
      private $make;   // Toyota, Volkswagen, Ford, Honda, Chevrolet
      private $model;  // Mustang, Pontiac, Prius, Focus, Beetle
      private $color;
      private $year;

      // class constructor that sets properties
      function Car( $make, $model, $color, $year )
      {
         $this->make = $make;
         $this->model = $model;
         $this->color = $color;
         $this->year = $year;
      }

      // define class method that gets properties
      function display()
      {
         printf( "Make: %s<br>", $this->make );
         printf( "Model: %s<br>", $this->model );
         printf( "Color: %s<br>", $this->color );
         printf( "Year: %d<br>", $this->year );
      }
   }

   // instantiating object instance
   $companyCar = new Car( "Toyota", "Corolla", "Tan", 1999 );

   // printing properties
   $companyCar->display();
?>
