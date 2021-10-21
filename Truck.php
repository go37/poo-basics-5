<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;

    private int $load = 0;
 
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity,int $load)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
        $this->load($load);
    }

    public function load($load)
    {
        while ($load <= 72) {
            echo "in filling" . PHP_EOL;
            $load ++;
        }
        echo "full" . PHP_EOL;
    }

    public function getSorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
}
