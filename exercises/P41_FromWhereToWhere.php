<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        global $STDIN;

        $from = (int) trim(fgets($STDIN));
        $to = (int) trim(fgets($STDIN));

        if ($from > $to) {
            $start = $to;
            $end = $from;
        } else {
            $start = $from;
            $end = $to;
        }

        for ($i = $start; $i <= $end; $i++) {
            echo $i . "\n";
        }       
    }
}
