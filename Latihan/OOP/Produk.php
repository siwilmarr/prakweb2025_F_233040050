<?php

// ===PARENT CLASS (CLASS INDUK)
class Produk {
    // Properti umum
    public $judul,
            $penulis,
            $penerbit,
            $harga;

// constructor milik parent
public function __construct( $judul, $penulis, $penerbit, $harga) 
{
    $this->judul = $judul;
    $this->penulis = $penulis; 
    $this->penerbit = $penerbit; 
    $this->harga = $harga; 
}

// method milik parent
public function getLabel() {
    return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
       return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
        
    }
}

?>