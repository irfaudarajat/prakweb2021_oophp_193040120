<?php

// jualanProduk
// Komik
// game
class Produk {
    public $judul = "judul",
            $penulis = "penulis", 
            $penerbit = "penerbit",
            $harga = 0;
 

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk("Naruto", "Sasuke", "Sakura", "Kakashi", 30000);
// $produk2 = new Produk("upin", "ipin", "fizi", "bu jupronagh", 60000);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "Komik :$produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();
?>