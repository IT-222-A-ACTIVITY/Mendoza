<?php

class Calculator_Subtraction {

    public $num1;
    public $num2;

    private $total;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function subtract() {
        $this->total = $this->num1 - $this->num2;
        return $this->total;
    }

    public function output() {
        echo $this->total;
    }
}

$calculator = new Calculator_Subtraction(8, 8);
$difference = $calculator->subtract();

echo " With problem " . $calculator->num1 . " - " . $calculator->num2 . " is equal to the difference of " . $difference . ".";

