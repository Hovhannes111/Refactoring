<?php
namespace App\Classes;

use App\Methods\IsEu;
use App\ApiRequests\BinlistApi;
use App\ApiRequests\RateApi;
use App\Helpers\Helpers;

class Refactoring 
{
    private $binlist;
    private $isEu;
    private $rate;

    public function __construct()
    {
        $this->binlist = new BinlistApi();
        $this->isEu = new IsEu();
        $this->rate = new RateApi();
    }

    public function getRefactoringData($row)
    {
        $binlist = $this->binlist->getBinlist($row->bin);
        $isEu    = $this->isEu->checkIsEu($binlist->country->alpha2);
        // $rate       = $this->rate->getRate($row->currency);
        $rate = 0.851586; // FOR TESTING YOU CAN USE THIS
        $amntFixed  = Helpers::getAmount($row->amount, $row->currency, $rate);
        $result = $amntFixed * ($isEu ? 0.01 : 0.02);
        return $result;
    }
}