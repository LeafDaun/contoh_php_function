<?php 

interface intInfoProduk
{
    public function getInfoProduk();
}

abstract Class Produk 
{
    public function __construct(
        protected string $judul,
        protected int $harga,
    )
    {
        // php 8
    }

    public function info() 
    {
        return "JUDUL : $this->judul | HARGA : Rp. $this->harga";
    }
}

class Komik extends Produk implements intInfoProduk
{
    public function __construct(
        protected string $judul,
        protected int $harga,
        protected int $halaman,
    )
    {
        // php 8
    }

    public function getInfoProduk()
    {
        return self::info() . " | HALAMAN : $this->halaman LEMBAR";
    }
}

class Games extends Produk implements intInfoProduk
{
    public function __construct(
        protected string $judul,
        protected int $harga,
        protected int $durasi,
    )
    {
        // php 8
    }

    public function getInfoProduk()
    {
        return self::info() . " | DURASI : $this->durasi MENIT";
    }
}

function cetak(...$data)
{
    foreach($data as $dt){
        echo $dt->getInfoProduk() . PHP_EOL;
    }
}

$data1 = new Komik("Doraemon", 5000, 64);
$data2 = new Komik("Dragonball", 8000, 77);
$data3 = new Games("GTA", 45000, 964);

cetak($data1,$data2,$data3);
