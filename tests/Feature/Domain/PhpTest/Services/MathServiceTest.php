<?php

namespace Domain\PhpTest\Services;

use App\Domain\PhpTest\Services\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{


    public function testCalculate()
    {
        $firstNumber = 10;
        $secondNumber = 5;
        $operator = "*";
        $this->assertEquals(50, MathService::calculate($firstNumber, $secondNumber, $operator));

        $operator = "+";
        $this->assertEquals(15, MathService::calculate($firstNumber, $secondNumber, $operator));

        $operator = "-";
        $this->assertEquals(5, MathService::calculate($firstNumber, $secondNumber, $operator));

        $operator = "/";
        $this->assertEquals(2, MathService::calculate($firstNumber, $secondNumber, $operator));

    }

    /**
     * Test the prime number validation consistence
     * References on the link below:
     * @link https://byjus.com/maths/how-to-find-prime-numbers/
     */
    public function testIsPrimeNumber()
    {
        $knownPrimeNumber = MathService::$knownPrimeNumbers;

        foreach ($knownPrimeNumber as $primeNumber) {
            $this->assertTrue(MathService::isPrimeNumber($primeNumber), "Failed to validate the prime number: $primeNumber");
        }

        $this->assertFalse(MathService::isPrimeNumber(8));
        $this->assertFalse(MathService::isPrimeNumber(4));
        $this->assertFalse(MathService::isPrimeNumber(12));

        // Example 1:
        // Take a number, say, 234256
        // Since the unit digit of 234256 is 6, it is not a prime number.
        $number = 234256;
        $this->assertFalse(MathService::isPrimeNumber($number));

        // Example 2:
        // Take a number, say, 26577
        // The unit digit of this number is not 0, 2, 4, 6 or 8
        // Now, take the sum of digits which will be: 2 + 6 + 5 + 7 + 7 = 27
        // Since 27 is divisible by 3, 26577 is not a prime number.
        $number = 26577;
        $this->assertFalse(MathService::isPrimeNumber($number));

        // Example 3:
        // Take another number, say, 2345
        // Since, the number ends with 5, therefore, it is divisible by 5.
        // 2345/5 = 469
        // Hence, apart from 1 and 2345, 5 is also a factor.
        // Therefore, 2345 is not a prime number
        $number = 2345;
        $this->assertFalse(MathService::isPrimeNumber($number));
    }

    public function testGetFactorial()
    {
        $this->assertEquals(120, MathService::getFactorial(5));
        $this->assertEquals(24, MathService::getFactorial(4));
        $this->assertEquals(6, MathService::getFactorial(3));
    }

    /**
     * Test the calc consistence
     * Reference on the link below:
     * @link https://www.calculatorsoup.com/calculators/financial/simple-interest-plus-principal-calculator.php
     * @return void
     */
    public function testCalcInterest()
    {
        $initialCapital = 100;
        $interestRate = 5;
        $interestTime = 3; // months
        $this->assertEquals(101.25, MathService::calcInterest($initialCapital, $interestRate, $interestTime));
        $interestTime = 24; // months
        $this->assertEquals(110.00, MathService::calcInterest($initialCapital, $interestRate, $interestTime));

        $initialCapital = 10000.00;
        $interestRate = 3.875;
        $interestTime = 5; // months
        $this->assertEquals(10161.46, MathService::calcInterest($initialCapital, $interestRate, $interestTime));
    }


}
