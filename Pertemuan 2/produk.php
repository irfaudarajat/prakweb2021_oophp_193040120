<?php

// jualanProduk
// Komik
// game
class Produk{
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct( $judul, $penerbit, $penulis, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello(){
        return "Hello World!";

    }
}

$produk1 = new Produk();
$produk->judul = "Naruto";
var_dump($produk1);


$produk2 = new Produk();
$produk->judul = "Upin ipin";
$produk2->tambahProperty = "ahahaha";
var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Uncharted";
$produk3->Penulis = "Yamete";
$produk3->penerbit = "irfa";
$produk3->harga = 10000; 

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();

?>