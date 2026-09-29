<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number:";
        $number1 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ( $number1 % 2 == 0){
            echo "Number is even.";
            } else {
            echo "Number is odd.";
        }
    }
}
