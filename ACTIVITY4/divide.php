<?php

class Calculator_Division {

    public $num1;
    public $num2;

    private $total;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function divide() {
        $this->total = $this->num1 / $this->num2;
        return $this->total;
    }

    public function output() {
        echo $this->total;
    }
}

$calculator = new Calculator_Division(8, 8);
$quotient = $calculator->divide();

echo " With problem " . $calculator->num1 . " ÷ " . $calculator->num2 . " is equal to the quotient of " . $quotient . ".";

