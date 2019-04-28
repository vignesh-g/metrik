<?php
include_once   __DIR__ ."/../vendor/autoload.php";
use App\PrimeNumber;
use App\Multiply;

/**
 * Class PrimeNumberMultiplication
 */

class PrimeNumberMultiplication
{
    private $argument;
   
    /**
    * @param int $argument
    *
    * @return null
    */
    
    public function __construct($argument)
    {
        $this->argument = $argument;
    }
   
    /**
    * displayTable method get prime number,multiply and display multiplication table
    *
    * @param null
    *
    * @return void
    */
    
    public function displayTable()
    {
        if ($this->argument>0) {
            $primeResource    = new PrimeNumber($this->argument);
            $primeNumber      = $primeResource->getPrimeNumber();
           
            $multiplyResource = new Multiply($primeNumber);
            $tableData 		  = $multiplyResource->multiplicationTable();
            $multiplyResource->display();
        } else {
            echo "Please provide argument\n";
        }
    }
}

$argument  = $argv['undefined'] ?? $argv[2] ?? 0;
$PrimeNumberMultiplication = new PrimeNumberMultiplication($argument);
echo $PrimeNumberMultiplication->displayTable();
