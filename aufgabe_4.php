<?php
class Shape {
  public function getArea(){

  }
}

class Rectangle extends Shape{

    public $width;
    public $heigth;

    public function __construct($width,$heigth)
    {
        $this->width= $width;
        $this->heigth = $heigth;
        }
    public function getArea(){
        return $this -> width * $this -> heigth;
    }
}

class Circle extends Shape{
    public $radius;

    public function __construct($radius)
    {
        $this->radius= $radius;
       }
  public function getArea(){
    return $this -> radius * $this -> radius * pi();
  }
}

$rectangle = new  Rectangle(10,5);
echo $rectangle->getArea();
echo "<br>";
$circle = new Circle(5);
echo $circle->getArea();