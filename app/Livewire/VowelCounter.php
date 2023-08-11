<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\GrammarService;
use Livewire\Component;

class VowelCounter extends Component
{
    public string $sentence;
    public function render()
    {
        return view('livewire.vowel-counter');
    }

    public function count(){


        $this->validate([
            "sentence" => "required|string"
        ]);

        return redirect()->to(route('exercise.6'))->with([
            "sentence" => $this->sentence,
            "result" => GrammarService::countVowels($this->sentence),
        ]);
    }
}
