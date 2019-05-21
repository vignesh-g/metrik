<?php
namespace App;

/**
 * Class PrimeNumber
 */

class PrimeNumber
{
    private $counter     = 0;
    private $number      = 3;
    private $primeNumber = [2];
    private $maxCounter;
    
    /**
    * @param int $maxCounter
    *
    * @return void
    */
  
    public function __construct($maxCounter)
    {
        $this->maxCounter = $maxCounter - 1;
    }

    /**
    * getPrimeNumber method gets n prime numbers
    *
    * @param null
    *
    * @return array
    */
    
    public function getPrimeNumber()
    {
        while (1) {
            $ceil = ceil(sqrt($this->number));
            $isPrime = true;
            for ($i = 3; $i <= $ceil; $i = $i + 2) {
                if ($this->number % $i == 0) {
                    $isPrime = false;
                }
            }
            if ($isPrime) {
                array_push($this->primeNumber, $this->number);
                $this->counter++;
                if ($this->counter == $this->maxCounter) {
                    break;
                }
            }
            $this->number = $this->number+2;
        }
        return $this->primeNumber;
    }
}
