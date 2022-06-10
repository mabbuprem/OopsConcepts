<?php
//MultiTraits Inheritance
trait Animal {
    public $name;
    public $color;
    function animal() {
        echo "animal execute \n";
    }
}

trait Cat {
    public $name;
    public $color;
    function cat() {
        echo "cat execute \n";
    }
}
class sounds {
    use Animal, Cat;
}
$sounds = new sounds();
$sounds->cat();
$sounds->animal();
?>