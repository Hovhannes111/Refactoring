<?php

use App\Methods\IsEu;
use PHPUnit\Framework\TestCase;

class IsEuTest extends TestCase
{
    protected $isEu;

    protected function setUp() :void
    {
        $this->isEu = new IsEu();
    }
    
    /**
     * @test
     */
    public function testIsEu():void
    {
        $isEu = $this->isEu->checkIsEu("FR");
        $this->assertTrue($isEu);
    }
}