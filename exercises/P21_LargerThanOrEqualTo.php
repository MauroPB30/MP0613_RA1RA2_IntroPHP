<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";
       $number1 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        echo "Give the second number:\n";
       $number2 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user
        if ($number1 > $number2) {
            echo "Greater number is: $number1\n";
        } elseif ($number1 < $number2) {
            echo "Greater number is: $number2\n";
        } else {
            echo "The numbers are equal!\n";
        }
        // Prompt the user for input
        
        // Get input from the user

        // Check year value
    }
}
