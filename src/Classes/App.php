<?php

namespace App\Classes;
require("vendor/autoload.php");

use App\Classes\Refactoring;
use Dotenv\Dotenv;

Dotenv::createImmutable(__DIR__.'/../../')->load();

class App
{
    private $rows;
    private $refacroting;

    public function __construct()
    {
        $this->rows = explode("\n", file_get_contents('input.txt'));
        $this->refacroting = new Refactoring;
    }

    public function refactiring()
    {
        foreach($this->rows as $row){
            $data = json_decode($row);
            $result = $this->refacroting->getRefactoringData($data);
            echo $result;
            print "\n";
        }
    }
}

$app = new App();
$app->refactiring();
