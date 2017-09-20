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
        return [new Driver, new Driver];
    }
}
