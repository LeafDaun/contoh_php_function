<?php 

function tes($var){
  // return $var > 2 ; // lebih besar dari dua
  return $var & 1 ; // mencari ganjil
  // return !($var & 1); // mencari genap
 }

$arr = array(1,3,2,3,4,5,6,8,10,11);
$arr2 = ['dadang', 'susan', 'hemly daun'];

print_r(array_filter($arr, 'tes'));
echo "<br> ------------- <br>";
print_r(array_filter($arr, fn($e) => $e > 5));
echo "<br> =============== <br> ";

print_r(array_reduce($arr, fn($a, $b) => $a + $b ));
echo "<br> =============== <br> ";

print_r(array_map(fn($e) => strlen($e), $arr2)); // arrow function hanya bisa satu baris