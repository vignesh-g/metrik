<?php
include_once   __DIR__ ."/../vendor/autoload.php";
use App\PrimeNumber;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass App\PrimeNumber
 */
class PrimeNumberTest extends TestCase
{
    private $primeNumber;
    private $primeNumberCount = 10;
    
    /**
     * @covers ::__construct
     */
    protected function setUp()
    {
        $this->primeNumber = new PrimeNumber($this->primeNumberCount);
    }
    
    /**
     * @covers ::__construct
     */
    public function testCanBeCreateValidClass()
    {
        $this->assertInstanceOf(
            PrimeNumber::class,
            $this->primeNumber
        );
    }
    
    /**
     * @covers ::getPrimeNumber
     */
    public function testIsgetPrimeNumberExists()
    {
        $this->assertTrue(
            method_exists($this->primeNumber, 'getPrimeNumber'),
            'Class does not have method getPrimeNumber'
        );
    }
    
    /**
     * @covers ::getPrimeNumber
     */
    public function testValidTypeCount()
    {
        $response 	   = $this->primeNumber->getPrimeNumber();
        $responsecount =  count($response);
        $this->assertInternalType('array', $response);
        $this->assertEquals($this->primeNumberCount, $responsecount);
    }
}
