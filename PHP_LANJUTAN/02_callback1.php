<?php

/* CALLBACK :
	ADALAH FUNCTION YANG MENJALANKAN FUNGSI YANG LAIN ATAU
	FUNGSI YANG DI EKSEKUSI SETELAH FUNGSI YANG LAIN DIJALANKAN
*/ 

// CONTOH 1:

function halo($nama){
	return "Halo " . $nama;
}

function tampilkanPesan($callback, $str){
	
	echo $callback($str);
}

echo tampilkanPesan("halo", "Hemly"); 
/*argumen "halo" adalah sebuah fungsi 
yang dipanggil atau disebut juga (variabel function)*/



