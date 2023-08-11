<?php

namespace App\Domain\PhpTest\Services;

class GrammarService
{
    /**
     * Check if the given word is a Palindrome or not
     * @param string $word
     * @return bool
     */
    public static function isPalindrome(string $word): bool
    {
        return strtolower(strrev($word)) === strtolower($word);
    }

    /**
     * Count the vowels from the given $sentence
     * @param string $sentence
     * @return int
     */
    public static function countVowels(string $sentence) : int
    {
        $vowelsCount = 0;
        foreach (str_split($sentence) as $letter){
            if (in_array(strtolower($letter), ["a", "e", "i", "o", "u"])){
                $vowelsCount++;
            }
        }
        return $vowelsCount;
    }
}
