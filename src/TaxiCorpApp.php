<?php
namespace Garoevans\TaxiCorp;

class TaxiCorpApp
{
    private $driverFactory;

    public function __construct(DriverFactory $driverFactory)
    {
        $this->driverFactory = $driverFactory;
    }

    public function getDrivers()
    {
        return $this->driverFactory->getDrivers();
    }
}
