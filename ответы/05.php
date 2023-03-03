<?php
$array = [];

while (count($array) < 100) {

    $rand = rand(1, 200);

    if (!in_array($rand, $array)) {
        $array[] = $rand;
    }

}
print_r($array);
