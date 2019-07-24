<?php
class Produk {
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;

  public function __construct($judul="judul1",$penulis="penulis1",$penerbit="penerbit3",$harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  //function di dalam class
  public function getLabel() {
    return "$this->penulis,$this->penerbit";
  }

}
//object 1 KOMIK
$produk1 = new Produk("Naruto","Masashi","Shonen Jump",30000);
//object 2 GAME
$produk2 = new Produk("harvet moon","Neil","Airlanga",10000);
//object 3 Progarming
$produk3 = new Produk("ini judul");

echo "Komik = $produk1->penulis, $produk1->penerbit";

echo "<hr>";

echo "Game = $produk2->penulis, $produk2->penerbit";

echo "<hr>";

echo "HAI = $produk3->judul,$produk3->penulis,penerbit = $produk3->penerbit";

 ?>
