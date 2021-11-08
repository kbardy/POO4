<?php

require_once 'Cars.php';

$car = new Car('red', 4, "fuel");

echo $car->setParkBrake();

try {
    $car->start();
} catch (Exception $e) {

    echo 'ATTENTION' . $e->getMessage();
    echo $car->setParkBrake();
} finally {
    echo 'My car rolls like a donut \n';
}

try {

    echo $car->start();
} catch (Exception $e) {

    echo $e->getMessage() . '\n';
    echo $car->setParkBrake() . '\n';
} finally {

    echo 'My car rolls like a donut \n';
}

echo $car->setParkBrake();