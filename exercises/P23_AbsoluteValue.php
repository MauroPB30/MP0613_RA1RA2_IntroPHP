<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        $number1 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $mult = $number1 * -1;
        $mult2 = $number1 * 1;
        
        if ( $number1 < 0){
            echo "$mult\n";
            } elseif ($number1 >= 0 ){
            echo "$mult2\n";
        }
        // Write your code here

    }
}
