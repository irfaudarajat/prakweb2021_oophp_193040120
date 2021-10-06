<?php

// jualanProduk
// Komik
// game
class Produk {
    public $judul,
            $penulis, 
            $penerbit,
            $harga;
    
    public function __construct($judul = "judul", $penulis ="penulis", $penerbit = "penulis", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }    

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Sasuke", "Sakura", "Kakashi", 30000);
$produk2 = new Produk("upin", "ipin", "fizi", "bu jupronagh", 60000);
$produk3 = new Produk("Boruto");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
?>