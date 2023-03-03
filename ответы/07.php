<?php

$data = [
    [
        'пенал',
        'краски',
        [
            'стакан',
            'монета'
        ]
    ],
    'шапка',
    'ботинки'
];

//вариант 1
function search(string $searchThing, array $searchArray): bool
{
    foreach ($searchArray as $value) {
        if (is_array($value)) {
            if (search($searchThing, $value)) {
                return true;
            }
        } else {
            if ($searchThing === $value) {
                return true;
            }
        }
    }
    return false;
}

//вариант 2
function findItem($item, $arr): bool
{
    foreach($arr as $value){
        if((is_array($value) && findItem($item, $value)) || $value == $item){
            return true;
        }
    }
    return false;
}

echo findItem("стакан", $data) ? 'true' : 'false'; //должно вывести true