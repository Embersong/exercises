<?php
//обычный способ
$arr =  ["str", 2, 3, 4, 5, 0, 0, 0, 5, 5];
for ($i = 4; $i >= 0; $i--) {
    $arr[$i * 2 + 1] = $arr[$i * 2] = $arr[$i];
}
print_r($arr);

//2 вариант только если во второй половине чисто нули
$arr =  ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];

$newArr = array_diff($arr, array(0));
print_r(array_merge(...array_map(null, $newArr, $newArr)));
