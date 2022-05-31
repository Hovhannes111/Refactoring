<?php
declare(strict_types=1);

use App\ApiRequests\RateApi;
use PHPUnit\Framework\TestCase;

class RateApiTest extends TestCase
{
    protected $data;

    protected function setUp() :void
    {
        $this->data = new RateApi();
    }

    /**
     * @test
     */
    public function checkDataTest()
    {
        $this->assertTrue(true);
    }

}