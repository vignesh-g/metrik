<?php
namespace App;

/**
 * Class Multiply
 */
 
class Multiply
{
    private $number;
    public $tableData;
    
    /**
    * @param array $number
    *
    * @return void
    */
    
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
    * multiplicationTable method generates multiplication table data
    *
    * @param null
    *
    * @return string tableData
    */
    
    public function multiplicationTable()
    { 
        $countArray = count($this->number);
        for ($i=0;$i<$countArray;$i++) {
            $multiply = $this->number[$i];
            $this->tableData .= $multiply.' | ';
            array_walk($this->number, function ($number) use ($multiply) {
                $this->tableData .= $number*$multiply.' ';
            });
            $this->tableData .= "\n";
        }
        return $this->tableData;
    }

    /**
    * display method displays multiplication table data
    *
    * @param null
    *
    * @return void
    */
    
    public function display()
    {
        echo ' | '.implode(' ', $this->number)."\n";
        echo str_repeat('---', count($this->number))."\n";
        echo $this->tableData;
        return;
    }
}
