<?php
/*
====================== CLOSURE ==========================
CLOSURE DI PHP ADALAH FUNGSI YANG TIDAK MEMILIKI NAMA ATAU DISEBUT JUGA
DENGAN ANONYMOUS FUNCTION.. AGAK BEDA DENGAN pengertian CLOSURENYA JAVASCRIPT SIH..
*/ 

// contoh sederhana :

$sayHallo = function ($nama){
	echo "Hai $nama apa kabar?";
};

$sayHallo('ibrahim');

// ------------------------------------------------------------
// contoh lain :
function ucapkanSalam($waktu) {
	return function($nama) use ($waktu) { // disini closurenya, dan 'use' digunakan untuk mengakses variable $waktu (lexical scope)
		echo "Hallo $nama, Selamat $waktu, apa kabarmu?";
	};
};

$selamatPagi	= ucapkanSalam('Pagi');
$selamatSiang	= ucapkanSalam('Siang');
$selamatMalam	= ucapkanSalam('Malam');

echo $selamatSiang('Hemly Daun');
echo "<br>";
echo $selamatMalam('Nuraini');


