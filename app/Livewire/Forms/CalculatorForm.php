<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class CalculatorForm extends Form
{

    #[Rule('required|integer', message: 'The first number is required!')]
    public int|null $firstNumber;

    #[Rule('required|integer|min:1', message: 'The second number is required!')]
    public int|null $secondNumber;

    #[Rule('required')]
    public string $operation = '+';
}
