<?php

class CarFactory {

    public static function getCar($type) {
        $type = ucfirst($type);
        $className = "Car$type";  // getCar(truck) => CarTruck
        return new $className();
    }

}