<?php
  // Interface definition
  Interface Imydetails {
     public function getName();
     public function getAge();
  }
  
   class MyClass implements Imydetails{
      public function getName() {
            echo "My name PremKumar".'<br>';
      }
      public function getAge(){
            echo "My Age .......";
      }
   }
   $obj = new MyClass;
   $obj->getName();
   $obj->getAge();
?>