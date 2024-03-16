<?php

class HeightConverter {

    public function FeetTometers ($feet) {
        return $feet * 0.3048;
    }
}

$converter = new HeightConverter();
$feet = 999;
$meter = $converter->FeetTometers($feet);

echo $feet . ' feet is equal to ' . $meter . ' meter/s. ';
