<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        global $STDIN;

        while (true) {
            echo "Give a number:";

            $number = (int) trim(fgets($STDIN));

            if ($number == 4) {
                break;
            }
        }
    }
}
