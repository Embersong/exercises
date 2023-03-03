<?php
//Простейший читаемый вариант

for ($i = 1; $i <= 100; $i++) {

    $fizz = ($i % 3 == 0);
    $buzz = ($i % 5 == 0);
    if ($fizz) {
        echo "Fizz";
    }
    if ($buzz) {
        echo "Buzz";
    }
    if (!$fizz && !$buzz) {
        echo $i;
    }
    echo "<br>";
}

//можно в одну строчку через тернарники, не очень то читается и расширяется
for ($i = 1; $i <= 100; print($i % 3 == 0 && $i % 5 == 0) ? "FizzBuzz<br>" : (($i % 5 == 0) ? "Buzz<br>" : (($i % 3 == 0) ? "Fizz<br>" : $i . "<br>")), $i++);