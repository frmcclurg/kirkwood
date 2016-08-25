<?php
   /**
    * Defining class with private attributes
    */
   class Car
   {
   	// declaring class properties
   	private $make;   // Toyota, Volkswagen, Ford, Honda, Peugeot, Hyundai-Kia, Nissan, Renault, Ferrari, Chevrolet, Daimler Chrysler
   	private $model;  // Mustang, Pontiac, Prius, Focus, Beetle
   	private $color;
   	private $year;
   	
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
   	
   	// property setter method
   	function setCarProperty( $key, $value )
   	{
   		if ( $key == "make" )
            $this->make = $value;
   		else if ( $key == "model" )
            $this->model = $value;
   		else if ( $key == "color" )
            $this->color = $value;
   		else if ( $key == "year" )
            $this->year = $value;
   	}
   	
   	// method that calls setter methods
   	function setCarAll( $make, $model, $color, $year )
   	{
         $this->setCarProperty( "make", $make );
         $this->setCarProperty( "model", $model );
         $this->setCarProperty( "color", $color );
         $this->setCarProperty( "year", $year );
   	}
   	
   	function getCarProperty( $key )
   	{
   		if ( $key == "make" )
            $value = $this->make;
   		else if ( $key == "model" )
            $value = $this->model;
   		else if ( $key == "color" )
            $value = $this->color;
   		else if ( $key == "year" )
            $value = $this->year;
   		
   		return( $value );
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
   
   echo "<h2> Empty Address </h2>";

   printf( "<pre> %s </pre>", 
   		var_export( $fredsCar, TRUE ) );

   echo "<h2> Setting Private Properties </h2>";
   
   $fredsCar->setCarProperty( "make", "Porsche" );
   $fredsCar->setCarProperty( "model", "Boxter" );
   $fredsCar->setCarProperty( "color", "Red" );
   $fredsCar->setCarProperty( "year", "2015" );
   
   $martysCar->setCarAll( "Toyota", "Corolla", "Gray", 2001 );

   echo "<h2> Initialized Properties </h2>";

   printf( "<pre> %s </pre>", 
   		var_export( $fredsCar, TRUE ) );
   
   printf( "<pre> %s </pre>", 
   		var_export( $martysCar, TRUE ) );
   
   echo "<h2> Execute a method </h2>";

   $fredsCar->startEngine();
   $martysCar->startEngine();
?>