<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\MathService;
use App\Livewire\Forms\CalculatorForm;
use Livewire\Component;

class Calculator extends Component
{
    public CalculatorForm $form;

    public array $availableOperations = ["+", "-", "*", "/"];

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $this->form->validate();
        return redirect()->to(route('exercise.1'))->with("result", MathService::calculate($this->form->firstNumber, $this->form->secondNumber, $this->form->operation));
    }
}
