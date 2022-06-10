<?php
    abstract class Flower {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function display();    
            
        }
    class Jasmine extends Flower {
       
        public function display()
        {
            return "The Fruit is $this->name"; 
            
        }
    }
    $obj = new Jasmine("Jasmine"); 
    echo $obj->display();    
?>