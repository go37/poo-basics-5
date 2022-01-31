<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        return true;
    }

    public function swithOff(): bool
    {
        return false;
    }
}
