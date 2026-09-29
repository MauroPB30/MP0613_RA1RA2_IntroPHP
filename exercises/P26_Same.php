<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";
        $wrd1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string:";
        $wrd2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($wrd1 === $wrd2) {
            echo "Same";
        } else {
            echo "Different";
        }
    }
}
