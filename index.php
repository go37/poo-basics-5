<?php
require_once 'Vehicle.php';

require_once 'Bicycle.php';
require_once 'Car.php';

$twingo = new Car();
$vtt = new Bicycle();

// This should return true :
var_dump($twingo->switchOn());

// This should return false :
var_dump($twingo->switchOff());

// This should return false :
$vtt->setCurrentSpeed(4);
var_dump($vtt->switchOn());

// This should return true :
$vtt->SetCurrentSpeed(13);
var_dump($vtt->switchOn());

// This should return true :
var_dump($vtt->switchOff());