<?php

// jualanProduk
// Komik
// game
class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello(){
        return "Hello World!";

    }
}

$produk1 = new Produk("Naruto", "Sasuke", "Sakura", "Kakashi", 30000);
$produk2 = new Produk("upin", "ipin", "fizi", "bu jupronagh", 60000);



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

?>