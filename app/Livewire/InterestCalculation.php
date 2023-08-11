<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\MathService;
use App\Livewire\Forms\InterestCalculationForm;
use Livewire\Component;

class InterestCalculation extends Component
{

    public InterestCalculationForm $form;
    public function render()
    {
        return view('livewire.interest-calculation');
    }

    public function calculate() {
        $this->form->validate();
        return redirect()->to(route('exercise.8'))->with([
            "data" => $this->form->all(),
            "result" => MathService::calcInterest($this->form->initialCapital, $this->form->interestRate, $this->form->interestTime),
        ]);
    }
}
