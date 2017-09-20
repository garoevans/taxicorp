<?php
namespace Garoevans\TaxiCorp;

class TaxiCorpApp
{
    private $driverFactory;
    private $vehicleFactory;

    public function __construct(
        DriverFactory $driverFactory,
        VehicleFactory $vehicleFactory
        ) {
        $this->driverFactory = $driverFactory;
        $this->vehicleFactory = $vehicleFactory;
    }

    public function getDrivers()
    {
        return $this->driverFactory->getDrivers();
    }

    public function getVehicles()
    {
        return $this->vehicleFactory->getVehicles();
    }
}
