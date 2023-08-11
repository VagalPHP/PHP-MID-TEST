<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\MathService;
use App\Livewire\Forms\GradeAverageForm;
use Livewire\Component;

class GradeAverage extends Component
{
    public GradeAverageForm $form;
    public function render()
    {
        return view('livewire.grade-average');
    }

    public function calculate() {
        $this->form->validate();
        return redirect()->to(route('exercise.7'))->with([
            "result" => MathService::getSubjectsAverage($this->form->firstGrade, $this->form->secondGrade, $this->form->thirdGrade),
        ]);
    }
}
