<?php

$choice = readline("do you want to ride a bicycle (1), drive a car (2) or a truck (3) ? ");

if ($choice == 1) {

    require_once "Bicycle.php";

    $bicycle = new Bicycle('blue', 1);

    echo $bicycle->forward();
    echo $bicycle->brake();
    
} elseif ($choice == 2) {

    require_once "Car.php";

    $car = new Car('green', 4, 'electric');

    echo $car->forward();

    echo $car->brake();

} elseif ($choice == 3) {

        require_once "Truck.php";
    
        $truck = new Truck('red', 2, 'fuel',12, 57);
    
        echo $truck->forward();
    
        echo $truck->brake();
    
} else {

    echo "error ! choice 1, 2 or 3 ... you're dead !!!" . PHP_EOL;

}
