<?php
namespace Garoevans\TaxiCorp\Tests;

use PHPUnit\Framework\TestCase;
use Garoevans\TaxiCorp\TaxiCorpApp;
use Garoevans\TaxiCorp\DriverFactory;
use Garoevans\TaxiCorp\Driver;
use Garoevans\TaxiCorp\VehicleFactory;
use Garoevans\TaxiCorp\Vehicle;

class TaxiCorpAppTest extends TestCase
{
    private function getTaxiCorpApp()
    {
        return new TaxiCorpApp(new DriverFactory, new VehicleFactory);
    }

    public function testAppExists()
    {
        $this->assertInstanceOf(TaxiCorpApp::class, $this->getTaxiCorpApp());
    }

    public function testAppCanListDrivers()
    {
        $drivers = $this->getTaxiCorpApp()->getDrivers();

        $this->assertNotEmpty($drivers);
        $this->assertContainsOnlyInstancesOf(Driver::class, $drivers);
    }

    public function testAppCanListVehicles()
    {
        $vehicles = $this->getTaxiCorpApp()->getVehicles();

        $this->assertNotEmpty($vehicles);
        $this->assertContainsOnlyInstancesOf(Vehicle::class, $vehicles);
    }
}
