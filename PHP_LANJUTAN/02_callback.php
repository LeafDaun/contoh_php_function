<?php

// CALLBACK PENULISAN STANDARD PHP :


function SayHello(string $nama, callable $filter) 
{
	$finalName = call_user_func($filter, $nama);
	echo "Hello $finalName " . '<br>';
}

SayHello('Hemly', function ($name) { return strtoupper($name) ; });
SayHello('Hemly', fn($e) => strtolower($e));
SayHello('Susan', 'strtoupper');