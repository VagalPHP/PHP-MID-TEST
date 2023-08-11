<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class InterestCalculationForm extends Form
{
    #[Rule('required|numeric', message: 'The initial capital ($) is required!')]
    public float|null $initialCapital;

    #[Rule('required|numeric', message: 'The interest rate (%) is required!')]

    public float|null $interestRate;

    #[Rule('required|integer', message: 'The interest time (in months) is required!')]
    public int|null $interestTime;
}
