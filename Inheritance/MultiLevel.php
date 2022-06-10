<?php
//MultiLevel Inheritance
class GrandFather {
    function grandf(){
        echo "Grand Father age = 85\n";
    }
}

class Father extends GrandFather {
    function father(){
        echo "Father age = 50 \n";
    }
}

class children  extends Father {
    function children(){
        echo "children age = 23 \n";
    }
}

$childr = new Children();
$childr->grandF();
$childr->father();
$childr->Children();
?>