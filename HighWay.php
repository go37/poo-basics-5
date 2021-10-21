<?php

abstract class HighWay
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}