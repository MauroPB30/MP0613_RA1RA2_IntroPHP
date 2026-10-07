<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        global $STDIN;

        $sum = 0;

        while (true) {
            $number = (int) trim(fgets($STDIN));

            if ($number == 0) {
                break;
            }

            $sum = $sum + $number;
        }

        echo "Sum of the numbers: " . $sum;
    }
}
