<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\MathService;
use Livewire\Component;

class Table extends Component
{
    public int $number;
    public function render()
    {
        return view('livewire.table');
    }

    public function getTable()
    {
        $this->validate([
            "number" => "required|integer"
        ]);

        return redirect()->to(route('exercise.5'))->with([
            "number" => $this->number,
            "result" => MathService::getTable1to10($this->number),
        ]);

    }
}
