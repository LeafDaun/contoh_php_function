<?php

function hitungFaktorial($angka) {
    if ($angka < 0) {
        return "Tidak dapat menghitung faktorial dari angka negatif";
    } elseif ($angka == 0 || $angka == 1) {
        return 1;
    } else {
        $faktorial = 1;
        for ($i = 2; $i <= $angka; $i++) {
            $faktorial *= $i;
        }
        return $faktorial;
    }
}

$angka = 5;
echo "Faktorial dari $angka adalah " . hitungFaktorial($angka);