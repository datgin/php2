<?php
class Animal
{
    public $an, $tiengKeu, $Chan;

    public function an()
    {
        echo "Ăn bằng miệng";
    }

    public function setChan($Chan)
    {
        $this->Chan = $Chan;
    }
    public function setTiengKeu($tiengKeu)
    {
        $this->tiengKeu = $tiengKeu;
    }
}

class Dog extends Animal
{
    public function diChuyen()
    {
        echo "Con chó di chuyển bằng " . $this->Chan . " chân";
    }

    public function tiengKeu()
    {
        echo "Con chó kêu " . $this->tiengKeu;
    }
}

class Cat extends Animal
{
    public function diChuyen()
    {
        echo "Con chim di Chuyển bằng " . $this->Chan . " chân";
    }
    public function tiengKeu()
    {
        echo "Con mèo kêu " . $this->tiengKeu;
    }
}

class Bird extends Animal
{

    public function diChuyen()
    {
        echo "Con chim di chuyển bằng " . $this->Chan;
    }

    public function tiengKeu()
    {
        echo "Con chim kêu " . $this->tiengKeu;
    }
}


$dog = new Dog();
$dog->diChuyen(4);
echo "<br>";
$dog->setTiengKeu("Gâu Gâu");
$dog->tiengKeu();

echo "<br>-------------------<br>";

$cat = new Cat();
$cat->diChuyen(4);
echo "<br>";
$cat->tiengKeu('Meo Meo');

echo "<br>-------------------<br>";

$bird = new Bird();
$bird->setChan("Cánh");
$bird->setTiengKeu('Chíu Chíp');
$bird->diChuyen();
echo "<br>";
$bird->tiengKeu();