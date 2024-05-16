<?php

// Fungsi untuk mengolah array menggunakan callback function
function processArray(array $data, callable $callbackFunc) {
    $result = [];
    foreach ($data as $item) {
        // Memanggil callback function yang diberikan untuk setiap elemen data
        $processedItem = $callbackFunc($item);
        $result[] = $processedItem;
    }
    return $result;
}

// Callback function pertama: Menggandakan nilai elemen array
function doubleValue($value) {
    return $value * 2;
}

// Callback function kedua: Mengubah elemen array menjadi uppercase
function makeUppercase($value) {
    return strtoupper($value);
}

// Callback function ketiga: Menggabungkan "Mr." ke depan nama
function addTitle($name) {
    return 'Mr. ' . $name;
}

// Array awal
$data = [1, 2, 3, 4, 5];

// Menggandakan nilai setiap elemen array menggunakan callback function doubleValue
$multipliedData = processArray($data, 'doubleValue');
print_r($multipliedData);

// Mengubah elemen array menjadi uppercase menggunakan callback function makeUppercase
$uppercaseData = processArray(['apple', 'banana', 'orange'], 'makeUppercase');
print_r($uppercaseData);

// Menambahkan "Mr." ke depan setiap elemen array menggunakan callback function addTitle
$names = ['John', 'Doe', 'Alice'];
$namesWithTitles = processArray($names, 'addTitle');
print_r($namesWithTitles);
