<?php 

// Closure dengan Operasi Matematika

function operasiMatematika($a, $b, $operator) {
    $result = null;
    switch ($operator) {
        case 'tambah':
            $result = function () use ($a, $b) {
                return $a + $b;
            };
            break;
        case 'kurang':
            $result = function () use ($a, $b) {
                return $a - $b;
            };
            break;
        case 'kali':
            $result = function () use ($a, $b) {
                return $a * $b;
            };
            break;
        case 'bagi':
            $result = function () use ($a, $b) {
                return $a / $b;
            };
            break;
        default:
            return $result = "Operator tidak valid.";
    }
    return $result;
}

$penjumlahan = operasiMatematika(5, 3, 'tambah');
echo $penjumlahan(); // Output: 8

$pengurangan = operasiMatematika(10, 6, 'kurang');
echo $pengurangan(); // Output: 4

$perkalian = operasiMatematika(4, 5, 'kali');
echo $perkalian(); // Output: 20

$pembagian = operasiMatematika(12, 3, 'bagi');
echo $pembagian(); // Output: 4
