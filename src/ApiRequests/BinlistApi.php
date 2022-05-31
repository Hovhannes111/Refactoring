<?php

namespace App\ApiRequests;

use App\Helpers\Helpers;
use Exception;

Class BinlistApi
{
    private $url = "https://lookup.binlist.net/";

    private function getApiRequest($bin) :string
    {
        try
        {
            $result = file_get_contents($this->url . $bin);
        } 
        catch(Exception $e)
        {
            Helpers::logger($e);
        }

        return $result;

    }

    public function getBinlist($bin) :object
    {
        $binResults = $this->getApiRequest($bin);
        $results = json_decode($binResults);
        return $results;
    }
}