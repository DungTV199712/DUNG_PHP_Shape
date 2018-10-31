<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Shape
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show(){
        return $this->name;
    }
}
class Circle extends Shape
{
    protected $radius;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius ,2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}
class Cylinder extends Circle
{
    public $height;
    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea(){
        return pi() * $this->radius ** 2;
    }
    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}
class Rectangle extends Shape
{
    public $height;
    public $width;
    public function __construct($name)
    {
        parent::__construct($name);
        $this->height = 5;
        $this->width =4;
    }

    function calculateArea(){
        return $this->height * $this->width;
    }
    function calculatePerimeter(){
        return ($this->height + $this->width)*2;
    }
}
class Square extends Rectangle
{
    function calculateArea(){
        return $this->height * $this->height;
    }
    function calculatePerimeter(){
        return $this->height * 4;
    }
}
$circle = new Circle('thang dan` nhat he mat troi',4);
echo $circle->show() .'<br/>';
echo 'dien tich hinh tron la : ' . $circle->calculateArea() . '<br/>';
echo 'chu vi hinh tron la : ' . $circle->calculatePerimeter() . '<br/>';
$cylinder = new Cylinder('hình trụ',3,4);
echo $cylinder->show() . '<br> ';
echo 'dien tich hinh tru la : ' . $cylinder->calculateArea() .'<br/>';
echo 'the tich hinh tru la : ' . $cylinder->calculateVolume() .'<br/>';
$rectangle = new Rectangle('Hinh chu nhat');
//$this->height = 4;
//$this->width = 5;
echo $rectangle->show() . '<br> ';
echo 'dien tich hinh chu nhat la : ' . $rectangle->calculateArea() . '<br>';
echo 'chu vi hinh chu nhat la : ' . $rectangle->calculatePerimeter() . '<br>';
$square = new Square('hinh vuong');
echo $square->show() . '<br> ';
echo 'dien tich hinh vuong la : ' . $square->calculateArea() . '<br>';
echo 'chu vi hinh vuong la : ' . $square->calculatePerimeter() . '<br>';
?>
</body>
</html>