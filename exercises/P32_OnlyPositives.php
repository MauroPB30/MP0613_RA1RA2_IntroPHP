<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        global $STDIN;

        while (true) {
            echo "Give a number:";

            $number = (int) trim(fgets($STDIN));

            if ($number < 0) {
                echo "Unsuitable number";
            } elseif ($number == 0) {
                break;
            } else {
                echo $number * $number;
            }
        }
    }
}
