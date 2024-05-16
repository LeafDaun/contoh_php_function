<?php

function processData($data, Closure $callbackFunc) {
    foreach ($data as $item) {
        // Memanggil callback function yang diberikan untuk setiap elemen data
        $result = $callbackFunc($item);
        echo "Hasil: " . $result . "<br>";
    }
}

// Penggunaan callback function dengan fungsi closure
$data = [1, 2, 3, 4, 5];
echo "Contoh 2: <br>";
$multiplier = 4;
processData($data, function ($value) use ($multiplier) {
    return $value * $multiplier;
});