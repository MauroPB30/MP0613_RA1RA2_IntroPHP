<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        global $STDIN;

        $number = (int) trim(fgets($STDIN));

        for ($i = 0; $i <= $number; $i++) {
            echo $i . "\n";
        }       
    }
}
