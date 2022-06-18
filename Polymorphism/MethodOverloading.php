<?php
class Shape {
    function __call($name,$arg) {
        if($name == "area") {
            switch(count($arg)) {
                case 1:return 3.14*$arg[0]*$arg[0];
                case 2 : return $arg[0]*$arg[1];

            }
        }
        
    }
    
}
$circle = new Shape();
echo "Area of Circle:".$circle->area(3) ."\n";
$rect = new Shape();
echo "Area of Rectangle:".$rect->area(5,6);
?>