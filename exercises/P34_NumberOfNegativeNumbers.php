<?php

class P34_NumberOfNegativeNumbers
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

            if ($number < 0) {
                $count++;
            }
        }

        echo "Number of negative numbers: " . $count;       
    }
}
