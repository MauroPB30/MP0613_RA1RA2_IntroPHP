<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
        echo "Value of the gift? ";
        $value = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $fixedTax1 = 100;
        $fixedTax2 = 1700;
        $fixedTax3 = 4700;
        $fixedTax4 = 22100;
        $fixedTax5 = 142100;

        $tax1 = 8;
        $tax2 = 10;
        $tax3 = 12;
        $tax4 = 15;
        $tax5 = 17;

        if ($value >= 0 && $value <= 4999) {
            echo "No tax!";
        } elseif ($value >= 5000 && $value <= 25000) {

            $valTax1 = $fixedTax1 + (($value - 5000) * $tax1) / 100;
            echo "Tax: " . $valTax1;
        } elseif ($value >= 25001 && $value <= 55000) {

            $valTax2 = $fixedTax2 + (($value - 25000) * $tax2) / 100;
            echo "Tax: " . $valTax2;
        } elseif ($value >= 55001 && $value <= 200000) {

            $valTax3 = $fixedTax3 + (($value - 55000) * $tax3) / 100;
            echo "Tax: " . $valTax3;
        } elseif ($value >= 200001 && $value <= 1000000) {

            $valTax4 = $fixedTax4 + (($value - 200000) * $tax4) / 100;
            echo "Tax: " . $valTax4;
        } elseif ($value > 1000000) {
            
            $valTax5 = $fixedTax5 + (($value - 1000000) * $tax5) / 100;
            echo "Tax: " . $valTax5;
        }
    }
}
