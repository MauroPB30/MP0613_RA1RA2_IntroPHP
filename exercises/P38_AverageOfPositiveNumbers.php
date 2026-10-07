<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        {
            global $STDIN;

            $count = 0;
            $sum = 0;

            while (true) {
                $number = (int) trim(fgets($STDIN));

                if ($number == 0) {
                    break;
                }

                if ($number > 0) {
                    $count++;
                    $sum = $sum + $number;
                }
            }

            if ($count == 0) {
                echo "Cannot calculate the average";
            } else {
                $average = $sum / $count;
                echo $average;
            }
        }
    }
}
