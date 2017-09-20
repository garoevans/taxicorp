<?php
namespace Garoevans\TaxiCorp\Tests;

use PHPUnit\Framework\TestCase;
use Garoevans\TaxiCorp\TaxiCorpApp;
use Garoevans\TaxiCorp\DriverFactory;
use Garoevans\TaxiCorp\Driver;

class TaxiCorpAppTest extends TestCase
{
    private function getTaxiCorpApp()
    {
        return new TaxiCorpApp(new DriverFactory);
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
}
