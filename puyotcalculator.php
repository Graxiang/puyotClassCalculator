<?php


class MyCalculator {

private $x=6;
private $y=9;
                                      
public function GG( $x) {
$this->nvx = $x;
}
public function GGG($y) {
$this->nvy = $y;
}


public function add() {
return $this->x + $this->y;
}
public function subtract() {
return $this->x - $this->y;
}
public function multiply() {
return $this->x * $this->y;
}
public function divide() {
return $this->y / $this->y;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add(). "<br>"; 
echo $mycalc-> multiply()."<br>";
echo $mycalc-> subtract()."<br>"; 
echo $mycalc-> divide()."<br>"; 
?>