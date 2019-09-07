<?php
declare(strict_types=1);

class Palindrome
{
    const PATTERN = '/^((\w) *(?:(?1)|\w?) *\2)$/iu';

    /**
     * @param string $work
     *
     * @return bool
     */
    static function isPalindrome(string $word): bool
    {
        return 1 === preg_match(self::PATTERN, $word);
    }
}
