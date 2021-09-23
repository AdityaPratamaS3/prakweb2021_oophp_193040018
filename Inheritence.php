<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmHalaman,
    $waktuMain;

  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jmHalaman = 0,
    $waktuMain = 0

  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmHalaman = $jmHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }



  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam. ";
    return $str;
  }
}



class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp.{$produk->harga})";
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masashi Kisihimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
