<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year:";
        $number1 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if (($number1 % 4 == 0 && $number1 % 100 !=0) || ($number1 % 400 == 0)) {
            echo "The year is a leap year.";
        } else {
            echo "The year is not a leap year.";
        }
    }
}
