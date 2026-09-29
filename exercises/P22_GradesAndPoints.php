<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points[0-100]:\n";
        $number1 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($number1 < 0){
            echo "Grade: impossible!\n";
        } elseif ($number1 >= 0 && $number1 <= 49){
            echo "Grade: failed\n";
        } elseif ($number1 >= 50 && $number1 <= 59){
            echo "Grade: 1\n";
        } elseif ($number1 >= 60 && $number1 <= 69){
            echo "Grade: 2\n";
        } elseif ($number1 >= 70 && $number1 <= 79){
            echo "Grade: 3\n";
        } elseif ($number1 >= 80 && $number1 <= 89){
            echo "Grade: 4\n";
        } elseif ($number1 >= 90 && $number1 <= 100){
            echo "Grade: 5\n";
        } elseif ($number1 > 100){
            echo "Grade: incredible!\n";
        }
    }   
}
