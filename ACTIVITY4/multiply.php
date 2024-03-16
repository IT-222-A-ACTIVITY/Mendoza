<?php

class Calculator_Multiply {

    public $num1;
    public $num2;

    private $total;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function multiply() {
        $this->total = $this->num1 * $this->num2;
        return $this->total;
    }

    public function output() {
        echo $this->total;
    }
}

$calculator = new Calculator_Multiply(8, 8);
$product = $calculator->multiply();

echo " With problem " . $calculator->num1 . " x " . $calculator->num2 . " is equal to the product of " . $product . ".";

