<?php

// model statement (MATCH STATEMENT) terbaru di PHP 8

function OperasiMath($a, $b, $operasi)
{
    $result = match ($operasi) {
        'kali' =>  $a * $b ,
        'tambah' =>  $a + $b ,
        'kurang' =>  $a - $b ,
        'bagi' =>  $a / $b ,
        'pangkat' =>  $a ** $b ,
        default => "tidak diketahui" ,
    };
    return $result;
}

echo OperasiMath(5,5, 'kali') . PHP_EOL;
echo OperasiMath(5,5, 'kurang');

echo PHP_EOL;
// ===========================================================

function operasiMatematika($operator) {
    return function ($a, $b) use ($operator) {
        switch ($operator) {
            case 'tambah':
                return $a + $b;
            case 'kurang':
                return $a - $b;
            case 'kali':
                return $a * $b;
            case 'bagi':
                return $b !== 0 ? $a / $b : 'Error: Pembagian dengan nol tidak diperbolehkan!';
            default:
                return 'Error: Operator yang diberikan tidak valid!';
        }
    };
}

$tambah = operasiMatematika('tambah');
$kurang = operasiMatematika('kurang');
$kali = operasiMatematika('kali');
$bagi = operasiMatematika('bagi');

echo "Penambahan: " . $tambah(5, 3) . "\n"; // Output: Penambahan: 8
echo "Pengurangan: " . $kurang(5, 3) . "\n"; // Output: Pengurangan: 2
echo "Perkalian: " . $kali(5, 3) . "\n"; // Output: Perkalian: 15
echo "Pembagian: " . $bagi(5, 2) . "\n"; // Output: Pembagian: 2.5
echo "Pembagian dengan nol: " . $bagi(5, 0) . "\n"; // Output: Pembagian dengan nol: Error: Pembagian dengan nol tidak diperbolehkan!
echo "Operasi yang tidak valid: " . $tambah(5, 3) . "\n"; // Output: Operasi yang tidak valid: Error: Operator yang diberikan tidak valid!

