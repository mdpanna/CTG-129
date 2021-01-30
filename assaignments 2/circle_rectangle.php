<?php

function Rectangle($length,$width){
    echo "<h4>Law of Rectangle</h4>";

    echo "Rectangle is =".$length * $width;
    
}
function Circle($length){
    echo "<h4>Law of Circle</h4>";
    echo "Circle is =".3.1416*($length*$length);
    
}
function Square($length){
    echo "<h4>Law of Square</h4>";
    echo "Square is =".$length*$length*$length*$length;
    
}


Rectangle(10,60);
Circle(15);
Square(30);

?>
