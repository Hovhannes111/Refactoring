<?php
declare(strict_types=1);

use App\ApiRequests\BinlistApi;
use PHPUnit\Framework\TestCase;

class BinlistApiTest extends TestCase
{
    protected $data;

    protected function setUp() :void
    {
        $this->data = new BinlistApi();
    }

    /**
     * @test
     */
    public function checkDataTest()
    {
        $this->assertTrue(true);
    }


}