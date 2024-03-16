<?php

class TriangularSystem {

    private $angle1;
    private $angle2;

    public function __construct($angle1, $angle2) {
        $this->angle1 = $angle1;
        $this->angle2 = $angle2;
    }

    public function calculateThirdAngle() {
        // Calculate the third angle by subtracting the sum of the given angles from 180°
        return 180 - ($this->angle1 + $this->angle2);
    }
}

// GIVEN VALUES
$angle1 = 99;
$angle2 = 99;

// Create an instance of TriangularSystem with the given angles
$triangularsystem = new TriangularSystem($angle1, $angle2);

// Calculate the third angle
$angle3 = $triangularsystem->calculateThirdAngle();

// Output the result
echo "The last angle is " . $angle3 . "°, giving a total of 180° angular value of the given triangle. :)";


