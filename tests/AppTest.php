<?php
declare(strict_types=1);

use App\Classes\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    protected $data;

    protected function setUp() :void
    {
        $this->data = new App();
    }

    /**
     * @test
     */
    public function checkDataTest()
    {
        $this->assertTrue(true);
    }
    
}