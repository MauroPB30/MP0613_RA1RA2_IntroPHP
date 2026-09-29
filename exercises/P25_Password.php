<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?:";
        $psswrd = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($psswrd === "Caput Draconis") {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
    }
}
