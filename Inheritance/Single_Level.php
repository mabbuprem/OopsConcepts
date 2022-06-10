<?php
//SingleLevel Inheritance
class Fruits {
    public $color;
    public $price;

    function __construct($color,$price)
    {
        echo "fruits constructor \n";
        $this->color = $color;
        $this->price = $price;
    }

    function display() {
        echo "Fruits color: $this->color \n";
        echo "Price of Fruits ; $this->price \n";
    }

}

class Grapes extends Fruits {

}
$grapes = new Grapes("Green", 100);
$grapes->display();
?>