<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class GradeAverageForm extends Form
{
    #[Rule('required|numeric', message: 'The first grade is required!')]
    public float|null $firstGrade;

    #[Rule('required|numeric', message: 'The second grade is required!')]

    public float|null $secondGrade;

    #[Rule('required|numeric', message: 'The third grade is required!')]
    public float|null $thirdGrade;
}
