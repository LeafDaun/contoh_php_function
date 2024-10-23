<?php 


class Mobil {
    private $merk;
    private $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getTahun() {
        return $this->tahun;
    }

    private function detail() {
        return "Merk: " . $this->merk . ", Tahun: " . $this->tahun;
    }
}

// Menggunakan Reflection untuk menganalisis kelas Mobil
$reflectionClass = new ReflectionClass('Mobil');

// Mengambil nama kelas
echo "Nama Kelas: " . $reflectionClass->getName() . PHP_EOL;

// Mengambil properti
$properties = $reflectionClass->getProperties();
foreach ($properties as $property) {
    echo "Properti: " . $property->getName() . PHP_EOL;
}

// Mengambil metode
$methods = $reflectionClass->getMethods();
foreach ($methods as $method) {
    echo "Metode: " . $method->getName() . PHP_EOL;
}

// Menggunakan Reflection untuk mengakses metode private
$mobil = new Mobil('Toyota', 2020);
$method = $reflectionClass->getMethod('detail');
$method->setAccessible(true); // Mengizinkan akses ke metode private
echo $method->invoke($mobil) . PHP_EOL; // Memanggil metode private

/*
Penjelasan
1. Kelas Database: Kelas ini menyimulasikan koneksi ke database dengan metode connect.

2. Kelas UserService: Kelas ini bergantung pada Database dan menggunakan metode connect untuk mendapatkan data pengguna.

3. Fungsi createService: Fungsi ini menggunakan Reflection untuk:
    - Mengambil informasi tentang konstruktor kelas yang diberikan.
    - Mengambil parameter dari konstruktor dan menciptakan instance dari setiap dependensi.
    - Mengembalikan instance dari kelas dengan dependensi yang sudah disuntikkan.
4. Membuat Instance: Kami memanggil createService dengan nama kelas UserService, yang secara otomatis menyuntikkan instance Database ke dalamnya.
*/

?>
