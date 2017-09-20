<?php
namespace Garoevans\TaxiCorp;

class VehicleFactory
{
    public function getVehicle()
    {
        return new Vehicle;
    }

    public function getVehicles()
    {
        return [$this->getVehicle(), $this->getVehicle()];
    }
}
