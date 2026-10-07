<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        global $STDIN;

        $count = 0;

        while (true) {
            $number = (int) trim(fgets($STDIN));

            if ($number == 0) {
                break;
            }

            $count++;
        }

        echo "Number of numbers: " . $count;
    }
}
