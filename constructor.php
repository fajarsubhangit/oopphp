<?php
class Produk {
  public $judul = "judul";
  public $penulis = "penulis";
  public $penerbit = "penerbit";
  public $harga = 0;

  public function __construct($judul,$penulis,$penerbit,$harga) {
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



 ?>
