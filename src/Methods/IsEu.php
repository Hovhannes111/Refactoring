<?php

namespace App\Methods;

Class IsEu
{
    private $currencies = [
        'AT','BE','BG','CY','CZ',
        'DE','DK','EE','ES','FI',
        'FR','GR','HR','HU','IE',
        'IT','LT','LU','LV','MT',
        'NL','PO','PT','RO','SE',
        'SI','SK'
    ];

    public function checkIsEu($c) :bool
    {
        return array_search($c, $this->currencies);
    }
}