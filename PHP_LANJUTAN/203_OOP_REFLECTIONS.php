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
