<?php 

//membuat interface :
interface infoProduk {
	public function getInfoProduk();
}

abstract class Produk {

	protected $judul,
			$harga,
			$halaman,
			$waktu;

	public function __construct($judul = 'judul', $harga = 0) {
		$this->judul = $judul;
		$this->harga = $harga;
		
	}

	public function setJudul( $judul ){
		$this->judul = $judul;
	}

	public function setHarga( $harga ){
		$this->harga = $harga;
	}

	abstract public function getInfo();

}

class Komik extends Produk implements infoProduk {
	public $halaman;

	public function __construct($judul, $harga, $halaman) {
		parent::__construct($judul, $harga);
		$this->halaman = $halaman;
	}

	public function getInfoProduk() {
		$str = "Komik : ". $this->getInfo() . " | {$this->halaman}-Halaman";
		return $str;                    
	}

	public function getInfo() {
		$str = "{$this->judul} | (Rp. {$this->harga}) ";
		return $str; 
	}
}

class Game extends Produk implements infoProduk {
	public $jam;

	public function __construct($judul, $harga, $jam) {
		parent::__construct($judul, $harga);
		$this->jam = $jam;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() ." | {$this->jam}-Jam";
		return $str;
	}

	public function getInfo() {
		$str = "{$this->judul} | (Rp. {$this->harga}) ";
		return $str; 
	}
}

class CetakInfoProduk {

		public $daftarProduk = array();

		public function tambahProduk( Produk $produk ) {
			$this->daftarProduk[] = $produk	;
		}

		public function cetak() {
			$str = "DAFTAR PRODUK : <br>";

			foreach ($this->daftarProduk as $p ) {
				$str .= "- {$p->getInfoProduk()} <br>";
			}
			return $str;
		}
}

$data = new Komik("Naruto", 5000, 120);
$data1 = new Game("GTA4", 150000, 5);
$data2 = new Komik('Doraemon',2000, 100);
$data3 = new Game('The Witcher 3', 12000, 9);


$cetakProduk = new CetakInfoProduk()	;
$cetakProduk->tambahProduk($data);
$cetakProduk->tambahProduk($data1);
$cetakProduk->tambahProduk($data2);
$cetakProduk->tambahProduk($data3);
echo $cetakProduk->cetak();






 ?>
