<?php
for ($i = 0; $i <= 50; $i++)
    echo "$i " . get_word($i, "яблок", "яблоко", "яблока") . "<br>";

function get_word($number, $word1, $word2, $word3)
{
    if ($number > 10 && $number <= 20) return $word1;
    else {
        return match ($number % 10) {
            1 => $word2,
            2, 3, 4 => $word3,
            default => $word1,
        };
    }

}