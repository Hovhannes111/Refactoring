<?php

namespace App\Helpers;

use Exception;

class Helpers
{
    public static function getAmount($amount, $currency, $rate) :float
    {
        if ($currency == 'EUR' or $rate == 0) {
            $amntFixed = $amount;
        }
        if ($currency != 'EUR' or $rate > 0) {
            $amntFixed = number_format($amount / $rate, 2);
        }
    
        return (int)$amntFixed;
    }

    public static function logger($error)
    {
        $log  = $error.PHP_EOL;
        file_put_contents('./logs/ErrorLogs.log', $log, FILE_APPEND);
        throw new Exception($error);
    }
}