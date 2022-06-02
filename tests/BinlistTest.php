<?php

use App\ApiRequests\BinlistApi;
use PHPUnit\Framework\TestCase;

class BinlistTest extends TestCase
{
    protected $binlist;

    protected function setUp() :void
    {
        $this->binlist = new BinlistApi();
    }

    /**
     * @test
     */
    public function testBinlistCountry() :object
    {
        $binlist = $this->binlist->getBinlist("45717360");
        $this->assertObjectHasAttribute("country", $binlist);
        return $binlist->country;
    }

    /**
     * @test
     * @depends testBinlistCountry
     */
    public function testBinlistAlpha($country) :void
    {
        $binlist = $this->binlist->getBinlist("45717360");
        $this->assertObjectHasAttribute("alpha2", $country);
    }
}