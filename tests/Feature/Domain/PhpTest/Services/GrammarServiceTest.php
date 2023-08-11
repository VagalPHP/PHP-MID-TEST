<?php

namespace Domain\PhpTest\Services;

use App\Domain\PhpTest\Services\GrammarService;
use PHPUnit\Framework\TestCase;

class GrammarServiceTest extends TestCase
{

    public function testIsPalindrome()
    {
        $word = "Ava";
        $this->assertTrue(GrammarService::isPalindrome($word));
        $word = "AVA";
        $this->assertTrue(GrammarService::isPalindrome($word));
        $word = "aVA";
        $this->assertTrue(GrammarService::isPalindrome($word));
        $word = "Cake";
        $this->assertFalse(GrammarService::isPalindrome($word));
        $word = "Two";
        $this->assertFalse(GrammarService::isPalindrome($word));
        $word = "Oil";
        $this->assertFalse(GrammarService::isPalindrome($word));

    }
}
