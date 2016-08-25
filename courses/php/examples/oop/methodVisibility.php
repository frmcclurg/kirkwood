<?php
   /**
    * Demonstrate visibility of a method
    */
   class MyClass {
       // define a public method
       public function myPublic( $status ) {
          printf( "%s method %s<br>", $status, __METHOD__ );
       }

       // define a protected method
       protected function myProtected( $status ) {
          printf( "%s method %s<br>", $status, __METHOD__ );
       }

       // define a private method
       private function myPrivate( $status ) {
          printf( "%s method %s<br>", $status, __METHOD__ );
       }

       // define another public method
       function switchBoard() {
           $this->myPublic( "Inside class" );
           $this->myProtected( "Inside class" );
           $this->myPrivate( "Inside class" );
       }
   }

   $myclass = new MyClass;
   $myclass->switchBoard(); // Public, Protected and Private work

   $myclass->myPublic( "<br>Ouside class" ); // Works
   // $myclass->myProtected( "<br>Outside class" ); // Fatal Error
   // $myclass->myPrivate( "<br>Outside class" ); // Fatal Error
?>
