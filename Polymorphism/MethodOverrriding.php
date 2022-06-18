<?php
    class Fruit {
        public $name;
        public $colour;
        public $price;
        public function __construct($name,$colour,$price) {
            $this->name = $name;
            $this->colour =$colour;
            $this->price =$price;
        }
        public function display() {
            echo "The Fruit is".$this->name;
            echo"The colour is".$this->colour;
        }        
            
}
    class Apple extends Fruit {
        public function __construct($name,$colour,$price) {
            $this->name=$name;
            $this->colour=$colour;
            $this->price = $price;
        }
    public function display() {
        echo "The Fruit is ".$this->name ."\n";
        echo"The colour is ".$this->colour ."\n";
        echo "The price is ".$this->price;
    }    
            
        }
    $apple = new apple("Apple","red",40);
    $apple-> display();
?>