<?php
declare(strict_types=1);

use App\ApiRequests\BinlistApi;
use App\ApiRequests\RateApi;
use App\Classes\App;
use App\Methods\IsEu;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    // protected $data;
    protected $binlist;
    protected $isEu;
    protected $rate;

    protected function setUp() :void
    {
        // $this->data = new App();
        $this->binlist = new BinlistApi();
        $this->isEu = new IsEu();
        $this->rate = new RateApi();
    }

    /**
     * @test
     */
    public function testFileExists()
    {
        $filename = "input.txt"; 
        $this->assertFileExists($filename);
        $file = file_get_contents($filename);
        return $file;
    }

    /**
     * @test
     * @depends testFileExists
     */
    public function testNotEmptyFileData($file)
    {
        $rows = explode("\n", $file);
        $this->assertNotEmpty($rows);
        // return $rows;
    }

    // /**
    //  * @test
    //  * @depends testNotEmptyFileData
    //  */
    // public function testCheckBinResults($rows)
    // {
    //     $arr = [];
    //     foreach($rows as $row){
    //         $data = json_decode($row);
    //         $binlist = $this->binlist->getBinlist($data->bin);
    //         $this->assertObjectHasAttribute("alpha2", $binlist->country);
    //         $arr[] = $binlist->country->alpha2; 
    //     }
    //     return $arr;
    // }

    // /**
    //  * @test
    //  * @depends testCheckBinResults
    //  */
    // public function testCheckIsEu($arr)
    // {
    //     $this->assertNotEmpty($arr);
    //     $boolArr = [];
    //     foreach($arr as $elem)
    //     {
    //         $isEu = $this->isEu->checkIsEu($elem);
    //         $boolArr[] = $isEu;
    //     }
    //     return $boolArr;
    // }
    
}