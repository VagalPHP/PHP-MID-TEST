<?php

namespace App\Domain\PhpTest\Services;

class MathService
{
    public static array $knownPrimeNumbers = [
        2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97,101,103,
        107,109,113,127,131,137,139,149,151,157,163,167,173,179,181,191,193,197,199
    ];


    /**
     * Calculate the value of an operation between two number
     * @note @note sail artisan test --filter=MathServiceTest::testIsPrimeNumber
     * @param int|float $firstNumber
     * @param int|float $secondNumber
     * @param string $operator "accepted values: +, -, *, /
     * @return int|float|string
     */
    public static function calculate(int|float $firstNumber, int|float $secondNumber, string $operator) : int|float|string {
        if (!in_array($operator, ["+", "-", "*", "/"])){
            return "Invalid operator, please take one of these: +, -, *, /";
        }
        $result = $firstNumber;
        match($operator){
            "+" => $result += $secondNumber,
            "-" => $result -= $secondNumber,
            "*" => $result *= $secondNumber,
            "/" => $result /= $secondNumber,
        };
        return $result;
    }

    /**
     * Check if a given number is a prime number or not
     * @note sail artisan test --filter=MathServiceTest::testIsPrimeNumber
     * Calc References on link below:
     * @link https://byjus.com/maths/how-to-find-prime-numbers/
     * @param int $number
     * @return bool
     */
    public static function isPrimeNumber(int $number) : bool {

        if (in_array($number, self::$knownPrimeNumbers)){
            return true;
        }

        if (strlen($number) > 1){
            // “Numbers ending with 0, 2, 4, 6 and 8 are never prime numbers.”
            // If a large number is ending with 5, then it is always divisible by 5. Hence, it is not a prime number
            $endNumber = substr($number, strlen($number) - 1, 1);

            if (in_array($endNumber, [0, 2, 4, 5, 6, 8])) {
                return false;
            }

            // “Numbers whose sum of digits are divisible by 3 are never prime numbers.”
            $numberParts = str_split($number);
            if (is_int(array_sum($numberParts) / 3)){
                return false;
            }

            $squareRoot = sqrt($number);
            if (is_int($squareRoot) && self::divisibleByPrimeNumbers($squareRoot)){
                return false;
            }
        } else {
            if (self::divisibleByPrimeNumbers($number)){
                return false;
            }
        }

        return true;
    }

    /**
     * Check if a given number is divisible by prime numbers
     * @param int $number
     * @return bool
     */
    private static function divisibleByPrimeNumbers (int $number) : bool {
        foreach (self::$knownPrimeNumbers as $primeNumber){
            if (is_int($number / $primeNumber)){
                return true;
            }
        }

        return false;
    }

    /**
     * Get the given number factorial
     * @note sail artisan test --filter=MathServiceTest::testGetFactorial
     * @param int $number
     * @return float|int
     */
    public static function getFactorial(int $number): float|int
    {
        $factorial = $number;

        for ($i = $number - 1; $i > 0; $i--){
            $factorial *= $i;
        }

        return $factorial;
    }

    /**
     * Get the given number table 1 to 10
     * @param int $number
     * @return string
     */
    public static function getTable1to10(int $number) : array
    {
        for($i = 1; $i <= 10; $i++) {
            $tableArray[$i] = $i * $number;
        }
        return $tableArray;
    }

    /**
     * Get the subject average from 3 grades
     * @param float $firstSubjectGrade
     * @param float $secondSubjectGrade
     * @param float $thirdSubjectGrade
     * @return float
     */
    public static function getSubjectsAverage(float $firstSubjectGrade, float $secondSubjectGrade, float $thirdSubjectGrade) : float
    {
        return round(($firstSubjectGrade + $secondSubjectGrade + $thirdSubjectGrade) / 3, 1);
    }

    /**
     * Get the interest amount at the end of the given period
     * @param float $initialCapital
     * @param float $interestRate
     * @param int $interestTimeInMonths
     * @return float
     */
    public static function calcInterest(float $initialCapital, float $interestRate, int $interestTimeInMonths) : float
    {
        return round($initialCapital * (1 + ($interestRate / 100) * ($interestTimeInMonths / 12)), 2);
    }


}
