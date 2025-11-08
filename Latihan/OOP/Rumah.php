<?php 

// definisi class rumah
class Rumah {

    // bagian property (data)
    // 'public'adalah 'visibility'

    public $warna;
    public $kamar;


    public function __construct( $warna, $kamar ) {

        // this artinya "object ini"
        $this->warna = $warna;
        $this->kamar = $kamar;
    }

    // // bagian method (perilaku) 

    // public function kunciPintu() {
    //     return "pintu di $this->jumlahTV sudah dikunci!";
    // }

}

function pasangPintu(Rumah $dataRumah ) {
    return "Pintu sedang dipasang dirumah " . $dataRumah->warna . 
    " dengan 4 + 2 = " . $dataRumah->kamar;
}

// ---Bagian Object Rumah Jadi---
// membuat object pertama dari class rumah
$Rumahsiwil = new Rumah("Biru", 6);

echo pasangPintu($Rumahsiwil);
echo "<br>";

// // mengakses property (melihat data)
// echo "Warna awal rumah saya:  " . $Rumahsiwil->warna;
// echo "<br>";
// echo "Jumlah Kamar Rumah Saya: " . $Rumahsiwil->jumlahkamar;
// echo "<br>";
// echo "Jumlah Tv dirumah tetangga: " . $rumahTetangga->jumlahTV;
// echo "<br>";
// echo$rumahTetangga->kunciPintu();


// // menjalankan method (melakukan aksi)
// echo $Rumahsiwil->gantiWarna("Biru");
// echo "<br>";

// // melihat data lagi setelah diubah
// echo "Warna baru rumah saya: " . $Rumahsiwil->warna;
// echo "<br>";

// // menjalankan method lain
// echo $Rumahsiwil->kunciPintu();
// echo "<br>";


// echo "<hr>";



// // membuat object kedua dari class rumah
// // kits sebut ini 'rumahTetangga'
// $rumahTetangga = new Rumah();
// echo "Warna Rumah Tetangga: " . $rumahTetangga->warna; //output: putih
// // warna rumah tetangga tetap "putih" karena dia
// // adalah object yang berbeda dari $Rumahsiwil
?>