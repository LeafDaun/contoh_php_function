<?php



// CONTOH 3: ===========================

function myCallback($item){
	return strlen($item);
}

$fruits = ['Apple', 'Grape', 'Melon', 'Banana', 'Orange'];
$lengths = array_map("myCallback", $fruits);
print_r($lengths);

// CONTOH 4: ANONYMOUS with array function ==============================

$fruits = ['Apple', 'Grape', 'Melon', 'Banana', 'Orange'];
$lengths = array_map(function($item){return strlen($item)}, $fruits);
print_r($lengths);

// CONTOH 5: ANONYMOUS ARROW FUNCTION with array funct ======================

$fruits = ['Apple', 'Grape', 'Melon', 'Banana', 'Orange'];
$lengths = array_map( fn($item) =>  strlen($item) , $fruits);
print_r($lengths);

// CONTOH 6:

$fruits = ['a' => 'Apel', 'b' => 'Belimbing', 'c' => 'Cerry'];
array_walk($fruits, function($item, $key) {
 echo $key . ". " . $item . "<br>";
});
