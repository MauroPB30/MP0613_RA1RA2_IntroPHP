<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        global $STDIN;

        $number = (int) trim(fgets($STDIN));

        if ($number <= 100) {
            for ($i = $number; $i <= 100; $i++) {
                echo $i . "\n";
            }
        }       
    }
}
