<?php
//Hierarchical Inheritance
class Robort {
        public function talk() {
            echo "Robort can Talk" ."\n";
        }
        public function walk() {
            echo "Robort can Walk" ."\n";
        }
    }

    class Rob1 extends Robort {
        public function sing() {
            echo "Robort can sing" ."\n";
        }

    }
class Rob2 extends Robort {
    public function cook() {
        echo "Robort can Cook" ."\n";
    }
}
$r2 =  new Rob2();
$r2-> cook();
$r2->walk();
?>