<?php

// CONTOH 7; CALLBACK PHP 5.4 ================================

function convert($str, $callback){
	$result = array( 	'upper' => strtoupper($str),
						'lower' =>  strtolower($str));

	if(is_callable($callback)){
		call_user_func($callback, $result);
	}
	
}

convert("sunyoto", function($nama){
	echo $nama['upper'];
});


// CONTOH 2 : CALLBACK PHP.8.0 ========================

