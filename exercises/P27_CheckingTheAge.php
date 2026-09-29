<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you?";
        $number1 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number1 >= 0 && $number1 <= 120) {
            echo "Ok";
        } else {
            echo "Impossible!";
        }
    }
}
