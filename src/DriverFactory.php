<?php
namespace Garoevans\TaxiCorp;

class DriverFactory
{
    public function getDriver()
    {
        return new Driver;
    }

    public function getDrivers()
    {
        return [$this->getDriver(), $this->getDriver()];
    }
}
