<?php
include_once   __DIR__ ."/../vendor/autoload.php";
use App\PrimeNumber;
use App\Multiply;
use PHPUnit\Framework\TestCase;

/**
 * Class MultiplyTest
 */
class MultiplyTest extends TestCase
{
    private $primeNumber;
    private $primeNumberCount = 10;
    private $multiply;
    
    /**
     * @covers App\PrimeNumber::__construct
     * @covers App\PrimeNumber::getPrimeNumber
     * @covers App\Multiply::Multiply
     */
    protected function setUp()
    {
        $primeObject    = new PrimeNumber($this->primeNumberCount);
        $primeNumber 	= $primeObject->getPrimeNumber();
        $this->multiply = new Multiply($primeNumber);
    }
    
    /**
     * @covers App\Multiply::__construct
     */
    public function testCanBeCreateValidClass()
    {
        $this->assertInstanceOf(
            Multiply::class,
            $this->multiply
        );
    }
    
    /**
     * @covers App\Multiply::__construct
     */
    public function testIsMultiplicationTableExists()
    {
        $this->assertTrue(
            method_exists($this->multiply, 'multiplicationTable'),
            'Class does not have method multiplicationTable'
        );
    }
    
    /**
     * @covers ::multiplicationTable
     */
    public function testValidType()
    {
        $response 	   = $this->multiply->multiplicationTable();
        $this->assertInternalType('string', $response);
    }
}
