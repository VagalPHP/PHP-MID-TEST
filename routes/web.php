<?php

use App\Domain\PhpTest\Services\GrammarService;
use App\Domain\PhpTest\Services\MathService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix" => "php-test/exercise"], function (){

    // Exercise 1: Simple Calculator
    // Create a calculator that takes two numbers and an operator (+, -, *, /) and returns the result
    // of the operation.
    Route::get('/1', \App\Livewire\Calculator::class)->name("exercise.1");

    // Exercise 2: Prime Numbers
    // Write a function that checks whether a number is prime or not. Then create a program that
    // prints the first 10 prime numbers.
    Route::get('/2', \App\Livewire\PrimeNumbers::class)->name("exercise.2");


    // Exercise 3: Factorial
    // Write a function to calculate the factorial of a number. Next, create a program that allows the
    // user to enter a number and displays the corresponding factorial.
    Route::get('/3', \App\Livewire\Factorial::class)->name("exercise.3");


    // Exercise 4: Palindrome
    // Create a function that checks whether a word is a palindrome (that is, whether it reads the
    // same backwards and forwards). The program must ask the user for a word and inform
    // whether or not it is a palindrome.
    Route::get('/4', \App\Livewire\Palindrome::class)->name("exercise.4");

    // Exercise 5: Table
    // Create a program that receives a number from the user and displays the table of that
    // number, from 1 to 10.
    Route::get('/5', \App\Livewire\Table::class)->name("exercise.5");

    // Exercise 6: Vowel Counter
    // Create a function that counts the number of vowels in a string. The program should ask the
    // user for a sentence and display how many vowels it has.
    Route::get('/6', \App\Livewire\VowelCounter::class)->name("exercise.6");

    // Exercise 7: Grade Average
    // Create a program that takes a student's grades in three different subjects and calculates the
    // average of the grades. Then display the calculated average.
    Route::get('/7', \App\Livewire\GradeAverage::class)->name("exercise.7");


    // Exercise 8: Interest Calculation
    // Create a function that calculates the final value of an investment based on initial capital,
    // interest rate, and investment time (in months). The program must prompt the user for these
    // values and display the final value.
    Route::get('/8', \App\Livewire\InterestCalculation::class)->name("exercise.8");

});
