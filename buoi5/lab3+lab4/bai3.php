<?php
class Shape
{
    public function calculateArea(){

    }
}
class Square extends Shape
{
    public $canh;
    public function __construct($canh){
        $this->canh = $canh;
    }
    public function calculateArea()
    {
        return $this->canh * $this->canh;
    }
}
class Circle extends Shape
{
    public $bankinh;
    public function __construct($bankinh){
        $this->bankinh = $bankinh;
    }
    public function calculateArea()
    {
        return $this->bankinh * $this->bankinh * 3.14;
    }
}
$vuong = new Square(2);
echo $vuong->calculateArea();
echo '<br>';
$tron = new Circle(2);
echo $tron->calculateArea();

