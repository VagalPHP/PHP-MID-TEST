<?php

use App\Domain\PhpTest\Services\MathService;

// Exercise 1: Simple Calculator
// Create a calculator that takes two numbers and an operator (+, -, *, /) and returns the result
// of the operation.
$firstNumber = 10;
$secondNumber = 5;
$operator = "a";

echo MathService::calculate($firstNumber, $secondNumber, $operator)."<br>";

//Exercise 2: Prime Numbers
//Write a function that checks whether a number is prime or not. Then create a program that
//prints the first 10 prime numbers.

