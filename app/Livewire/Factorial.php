<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\MathService;
use Livewire\Component;

class Factorial extends Component
{

    public int $number;

    public function render()
    {
        return view('livewire.factorial');
    }

    public function calculate()
    {
        $this->validate([
            "number" => 'required|integer|min:1'
        ]);

        return redirect()->to(route('exercise.3'))->with([
            "number" => $this->number,
            "result" => MathService::getFactorial($this->number)
        ]);
    }
}
