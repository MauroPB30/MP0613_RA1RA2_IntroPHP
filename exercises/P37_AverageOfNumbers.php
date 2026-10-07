<?php

class P37_AverageOfNumbers
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

        if ($count == 0) {
            echo "Average of the numbers: 0";
        } else {
            $average = $sum / $count;
            echo "Average of the numbers: " . $average;
        }       
    }
}
