<?php
namespace Garoevans\TaxiCorp\Tests;

use PHPUnit\Framework\TestCase;

class TaxiCorpAppTest extends TestCase
{
  public function testAppExists()
  {
    $taxiCorpApp = new \Garoevans\TaxiCorp\TaxiCorpApp;
    $this->assertTrue($taxiCorpApp instanceof \Garoevans\TaxiCorp\TaxiCorpApp);
  }
}
