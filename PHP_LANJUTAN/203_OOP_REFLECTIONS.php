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
=====================================================================================
CONTOH 2 :
*/


Class Person 
{
    
    function __construct(
        protected string $name,
        protected int $age,
    )
    {
        // php 8
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

    private function getDetails()
    {
        return "DATA : Name $this->name , Age $this->age Years";
    }
}

$person = new Person('Hemly Daun', 43);
$reflection = new ReflectionClass($person);
echo "Name Class : " . $reflection->getName() . PHP_EOL;
$nomor = 1;
$nomor2 = 1;
$properties = $reflection->getProperties();

foreach($properties as $property){
    echo "Property : $nomor " . $property->getName() . PHP_EOL;
    $nomor++;
}

$method = $reflection->getMethods();

foreach($method as $mth){
    echo "Method : $nomor2 " . $mth->getName() . PHP_EOL;
    $nomor2++;
}

$p = $reflection->getMethod('getDetails');

echo $p->invoke($person);

?>
