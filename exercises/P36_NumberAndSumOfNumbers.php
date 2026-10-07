<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        global $STDIN;

        $count = 0;
        $sum = 0;

        while (true) {
            $number = (int) trim(fgets($STDIN));

            if ($number == 0) {
                break;
            }

            $count++;
            $sum = $sum + $number;
        }

        echo "Number of numbers: " . $count;
        echo "Sum of the numbers: " . $sum;       
    }
}
