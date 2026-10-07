<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
        global $STDIN;

        while (true) {
            echo "Shall we carry on?";

            $input = trim(fgets($STDIN));

            if (strtolower($input) === "no") {
                break;
            }
        }
    }
}
