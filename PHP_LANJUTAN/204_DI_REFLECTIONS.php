<?php

class Database {
    public function connect() {
        return "Koneksi ke database berhasil.";
    }
}

class UserService {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getUser() {
        return $this->db->connect() . " Mengambil data pengguna.";
    }
}

// Fungsi untuk melakukan Dependency Injection
function createService($serviceClass) {
    $reflectionClass = new ReflectionClass($serviceClass);
    $constructor = $reflectionClass->getConstructor();
    
    if ($constructor) {
        $parameters = $constructor->getParameters();
        $dependencies = [];
        
        foreach ($parameters as $parameter) {
            $paramClass = $parameter->getType()->getName();
            $dependencies[] = new $paramClass(); // Membuat instance dari dependensi
        }

        return $reflectionClass->newInstanceArgs($dependencies);
    }

    return $reflectionClass->newInstance();
}

// Membuat instance UserService dengan dependency injection
$userService = createService('UserService');
echo $userService->getUser() . PHP_EOL;

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
