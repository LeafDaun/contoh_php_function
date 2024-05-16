<?php

// menjumlahkan panjang array

$arr1 = ['es', 'wer', 'tatix'];
$arr2 = ['e', 'ed', 'xx'];
// jika dijumlahkan masing2 elemen maka : 3-5-7

$hitung1 = array_map('strlen', $arr1);
$hitung2 = array_map('strlen', $arr2);

// buat array baru untuk menampung hasil penjumlahan array
$arrBaru = [];

for ($i=0; $i < count($hitung1) && count($hitung2); $i++) { 
	$arrBaru[] = $hitung1[$i] + $hitung2[$i];

}

print_r($arrBaru);
