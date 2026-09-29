<?php

class P20_Adulthood
{
    public function main(): void
    {
        echo "How old are you?\n";
       $number = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Get input from the user

        // Check year value
        if ($number < 18) {
            echo "You are not an adult\n";
        } else {
            echo "You are an adult\n";
        }
        // Write your code here
        // Prompt the user for input
       
        // Get input from the user

        // Check year value
       
    }
}
