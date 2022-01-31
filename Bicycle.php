<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        return true;
    }

    public function swithOff(): bool
    {
        if ($currentSpeed > 10) {
            return false;
        }
    }
}
