<?php
   /**
    * Demonstrate visibility of methods in sub-class
    */
   class MyClass {
       // Declare a public method
       public function myPublic( $status ) {
          printf( "%s method %s<br>", $status, __METHOD__ );
       }

       // Declare a protected method
       protected function myProtected( $status ) {
          printf( "%s method %s<br>", $status, __METHOD__ );
       }

       // Declare a private method
       private function myPrivate( $status ) {
          printf( "%s method %s<br>", $status, __METHOD__ );
       }
   }

   class MySubClass extends MyClass {
       // Also a public method
       function switchBoard() {
          $this->myPublic( "Inside MySubClass" );
          $this->myProtected( "Inside MySubClass" );
          // $this->myPrivate( "Inside MySubClass" ); // fatal error
       }
   }

   $mySubClass = new MySubClass;
   $mySubClass->switchBoard(); // public and protected work, not private

   $mySubClass->myPublic( "<br> Outside MySubClass" ); // works
   // $mySubClass->myProtected( "<br> Outside MySubClass" ); // fatal error
   // $mySubClass->myPrivate( "<br> Outside MySubClass" ); // fatal error
?>
