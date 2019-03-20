<?php
require 'index.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    public function testInputOne()
    {
        $fizzbuzz = new FizzBuzz(1);
        $this->assertEquals('1', (string) $fizzbuzz);
    }

    public function testInputThree()
    {
        $fizzbuzz = new FizzBuzz(3);
        $this->assertEquals('Reformed', (string) $fizzbuzz);
    }

    public function testInputFive()
    {
        $fizzbuzz = new FizzBuzz(5);
        $this->assertEquals('Tech', (string) $fizzbuzz);
    }

    public function testInputFifteen()
    {
        $fizzbuzz = new FizzBuzz(15);
        $this->assertEquals('ReformedTech', (string) $fizzbuzz);
    }

    public function testInputOneHundredAndOne()
    {
        $fizzbuzz = new FizzBuzz(101);
        $this->assertEquals('101', (string) $fizzbuzz);
    }

    public function testInputNinetyNine()
    {
        $fizzbuzz = new FizzBuzz(99);
        $this->assertEquals('Reformed', (string) $fizzbuzz);
    }

    public function testInputOneHundred()
    {
        $fizzbuzz = new FizzBuzz(100);
        $this->assertEquals('Tech', (string) $fizzbuzz);
    }

    public function testInputOneHundredAndFive()
    {
        $fizzbuzz = new FizzBuzz(105);
        $this->assertEquals('ReformedTech', (string) $fizzbuzz);
    }

}
?>      