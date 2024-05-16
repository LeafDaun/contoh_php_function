<?php 

function processArray(array $data, Closure $callback) {
    $result = [];
    foreach ($data as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = processArray($numbers, function ($num) {
    return $num * $num;
});

print_r($squaredNumbers);
// $squaredNumbers akan berisi array [1, 4, 9, 16, 25]
