<?php

namespace App\Livewire;

use App\Domain\PhpTest\Services\GrammarService;
use Livewire\Component;

class Palindrome extends Component
{
    public string $word;
    public function render()
    {
        return view('livewire.palindrome');
    }

    public function check()
    {
        $this->validate([
            "word" => "required|string"
        ]);

        return redirect()->to(route('exercise.4'))->with([
            "word" => $this->word,
            "result" => GrammarService::isPalindrome($this->word),
        ]);

    }
}
