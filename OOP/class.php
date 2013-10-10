<?php

class Circle {
    private $x;
    private $y;
    private $r;

    public function __construct($x, $y, $r) {
        $this -> x = $x;
        $this -> y = $y;
        $this -> r = $r;
    }

    public function __toString() {
        return "Окружность с центром в (" . $this -> x . ";" . $this -> y . ") и радиусом " . $this -> r . "<br />";
    }

    public function getX() {
        return $this -> x;
    }

    public function getY() {
        return $this -> y;
    }

    public function getR() {
        return $this -> r;
    }

    public function setX($x) {
        $this -> x = $x;
    }

    public function setY($y) {
        $this -> y = $y;
    }

    public function setR($r) {
        $this -> r = $r;
    }

    public function setCircle($circle) {
        $this -> x = $circle -> x;
        $this -> y = $circle -> y;
        $this -> r = $circle -> r;
    }

    public function getResult ($circle){
        if ($this ->  getDistance($circle) > ($circle->r + $this ->r)){
            echo "<br />Круги не пересекаются!";
        }
        else {
            echo "<br />Круги пересекаются!";
        }
    }

    public function getDistance($circle) {
        return sqrt($this -> getPow2($circle));
    }

    private function getPow2($circle) {
        return pow(($this -> x - $circle -> x), 2) + pow(($this -> y - $circle -> y), 2);
    }

    public function __destruct() {
        echo "<br /> Объект уничтожен!";
    }
}
$circle = new Circle(4, 6, 8);
//echo $circle -> x . "<br />";
//echo $circle -> y . "<br />";
//echo $circle -> r . "<br />";
//$circle -> x = 250;
//$circle -> y = 350;
//$circle -> r = 450;
//echo $circle -> x . "<br />";
//echo $circle -> y . "<br />";
//echo $circle -> r . "<br />";
//echo $circle -> getX() . "<br />";
//$circle -> setX(777) . "<br />";
//echo $circle -> getX() . "<br />";
echo $circle;
$circle_1 = new Circle(15, -7, 2);
echo $circle_1;
//$circle -> setCircle($circle_1);
echo $circle -> getDistance($circle_1);
echo $circle -> getResult($circle_1);
?>
