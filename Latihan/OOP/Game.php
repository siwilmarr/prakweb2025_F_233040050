<?php
require_once 'Produk.php';
require_once 'Komik.php';

// === CHILD CLASS KEDUA ===
class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktuMain ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getLabel() . " | (Rp. " .$this->harga . ") - ($this->waktuMain) Jam";
        return $str;
    }
}

// --- bagian object---
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// menjalankan method
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>