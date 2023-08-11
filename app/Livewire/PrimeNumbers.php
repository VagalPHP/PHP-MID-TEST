<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\MathService;
use Livewire\Component;

class PrimeNumbers extends Component
{
    public int $number;
    public function render()
    {
        return view('livewire.prime-numbers');
    }

    public function check()
    {
        $this->validate([
            "number" => 'required|integer|min:1'
        ]);
        return redirect()->to(route('exercise.2'))->with([
            "number" => $this->number,
            "result" => MathService::isPrimeNumber($this->number),
            "primeNumbers" => array_slice(MathService::$knownPrimeNumbers, 0, 10)
        ]);
    }
}
