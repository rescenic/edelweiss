<?php
class Vehicle
{    
    public function move()
    {
        echo "Move the car";
    }    
}

class Tire
{    
    public function addAlloys()
    {
        echo "Adding alloy wheels...";
    }    
}

class Car
{
    private $vehicle;

    private $tire;

    public function __construct(Vehicle $vehicle, Tire $tire)
    {
        $this->vehicle = $vehicle;
        $this->tire = $tire;
    }

    public function accelarate()
    {    
        $this->vehicle->move();    
        $this->tire->addAlloys();
    }
}