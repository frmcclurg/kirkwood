<?php
   /**
    * Defining class with public attributes
    */
   class Car
   {
   	// declaring public class properties
   	public $make;   // Toyota, Volkswagen, Ford, Honda, Chevrolet
   	public $model;  // Mustang, Pontiac, Prius, Focus, Beetle
   	public $color;
   	public $year;
   	
   	// class method to display properties
   	function display()
   	{
   		// initialize string
   		$output = '';
   		
         $output .= printf( "Make: %s<br>", $this->make );
         $output .= printf( "Model: %s<br>", $this->model );
         $output .= printf( "Color: %s<br>", $this->color );
         $output .= printf( "Year: %d<br>", $this->year );
   	}
   	
   	// class method
   	function startEngine()
   	{
   		if ( $this->make == "Porsche" )
   		{
   		   $sound = "Varroom";
   		}
   		elseif ( $this->make == "Mazda" )
   		{
   			$sound = "Hummm";
   		}
   		else
   		{
   			$sound = "Putter, Putt, Putt";
   		}
   		
   		printf( "Sound: %s<br>", $sound );
   	}
   }
   
   // function to display object attributes
   function dumpObject( $obj )
   {
      printf( "<pre> %s </pre>", 
            var_export( $obj, TRUE ) );
   }

   echo "<h2> Create New Objects </h2>";

   $fredsCar = new Car();  // instantiating instance
   $martysCar = new Car();  // instantiating instance
   
   echo "<h2> Display Empty Properties </h2>";

   dumpObject( $fredsCar );
   dumpObject( $martysCar );

   echo "<h2> Setting Public Properties </h2>";
   
   $fredsCar->make = "Porsche";
   $fredsCar->model = "Boxster";
   $fredsCar->color = "Red";
   $fredsCar->year = 2015;
   
   $martysCar->make = "Toyota";
   $martysCar->model = "Corolla";
   $martysCar->color = "Gray";
   $martysCar->year = 2009;
   
   echo "<h2> Display Initialized Properties </h2>";

   dumpObject( $fredsCar );
   dumpObject( $martysCar );
   
   echo "<h2> Execute Methods </h2>";

   $fredsCar->startEngine();
   $martysCar->startEngine();
?>
