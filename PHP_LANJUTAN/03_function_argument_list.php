<?php 

function sum(...$values){
	$total = 0;
	foreach($values as $value){
		$total += $value;
	}
	return $total;
}

echo sum(100,50,25,25);