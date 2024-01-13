<?php

class Shape
{
    public function calculateArea()
    {
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return "Diện tích hình tròn là: " . $this->radius * $this->radius * pi();
    }
}

class Rectangle extends Shape
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return "Diện tích hình chữ nhật là: " . $this->width * $this->height;
    }
}

$Circle = new Circle(5);
echo $Circle->calculateArea();
echo "<br>";

$Rectangle = new Rectangle(4, 5);
echo $Rectangle->calculateArea();
