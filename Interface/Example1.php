<?php
   Interface MyInterface {
      public function getName();
      public function getAge();
   }
   class MyClass implements MyInterface{
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