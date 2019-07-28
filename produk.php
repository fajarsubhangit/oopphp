<?php
class Produk {
  public $judul = "judul";
  public $penulis = "penulis";
  public $penerbit = "penerbit";
  public $harga = null;

  //function di dalam class
  public function getLabel() {
    return "$this->penulis,$this->penerbit";
  }

}
//object 3 KOMIK
$produk3 = new Produk();
$produk3->judul ="naruto";
$produk3->penulis = "kisimoto";
$produk3->penerbit = "jump inc";
$produk3->harga = 10000;

//object 4 GAME
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "neil druckman";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "komik : ".$produk3->getLabel();
echo "<br>";
echo "game :".$produk4->getLabel();

 ?>
